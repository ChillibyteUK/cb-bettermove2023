/**
 * Session Tracking using Cookies
 * 
 * Tracks referring URL, first page, and UTM parameters using browser cookies
 * instead of PHP sessions to avoid issues with server-side caching.
 */

(function() {
    'use strict';

    // Helper function to get cookie value
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return decodeURIComponent(parts.pop().split(';').shift());
        return null;
    }

    // Helper function to set cookie (30 days expiry)
    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/;SameSite=Lax";
    }

    // Helper function to get URL parameter
    function getUrlParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    // Check if data has been captured
    const dataCaptured = getCookie('cb_data_captured');

    if (!dataCaptured) {
        let hasTrackingData = false;

        // Store referring URL only if it's external
        if (!getCookie('cb_referring_url') && document.referrer) {
            const currentDomain = window.location.hostname;
            const referrerDomain = new URL(document.referrer).hostname;
            
            if (currentDomain !== referrerDomain) {
                setCookie('cb_referring_url', document.referrer, 30);
                hasTrackingData = true;
            }
        }

        // Capture UTM parameters
        const utmParams = ['utm_source', 'utm_medium', 'utm_term'];
        utmParams.forEach(function(param) {
            const value = getUrlParam(param);
            if (value && !getCookie('cb_' + param)) {
                setCookie('cb_' + param, value, 30);
                hasTrackingData = true;
            }
        });

        // Always store first page
        if (!getCookie('cb_first_page')) {
            const firstPage = window.location.protocol + '//' + window.location.hostname + window.location.pathname;
            setCookie('cb_first_page', firstPage, 30);
        }

        // Mark data as captured if we have tracking data
        if (hasTrackingData) {
            setCookie('cb_data_captured', '1', 30);
        }
    }

    // Handle clear_session parameter
    if (getUrlParam('clear_session')) {
        // Clear all tracking cookies
        const cookies = ['cb_referring_url', 'cb_first_page', 'cb_utm_source', 'cb_utm_medium', 'cb_utm_term', 'cb_data_captured'];
        cookies.forEach(function(cookie) {
            document.cookie = cookie + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
        });
        
        // Redirect to remove the clear_session parameter
        const url = new URL(window.location);
        url.searchParams.delete('clear_session');
        window.location.href = url.toString();
    }
})();

<?php

function parse_phone($phone)
{
    $phone = preg_replace('/\s+/', '', $phone);
    $phone = preg_replace('/\(0\)/', '', $phone);
    $phone = preg_replace('/[\(\)\.]/', '', $phone);
    $phone = preg_replace('/-/', '', $phone);
    $phone = preg_replace('/^0/', '+44', $phone);
    return $phone;
}

function split_lines($content)
{
    $content = preg_replace('/<br \/>/', '<br/>&nbsp;<br/>', $content);
    return $content;
}

add_shortcode('contact_address', function () {
    $output = get_field('contact_address', 'options');
    return $output;
});

add_shortcode('contact_phone', function () {
    if (get_field('contact_phone', 'options')) {
        return '<a href="tel:' . parse_phone(get_field('contact_phone', 'options')) . '">' . get_field('contact_phone', 'options') . '</a>';
    }
    return;
});
add_shortcode('contact_phone_icon', function () {
    if (get_field('contact_phone', 'options')) {
        return '<a href="tel:' . parse_phone(get_field('contact_phone', 'options')) . '"><i class="fa-solid fa-phone"></i></a>';
    }
    return;
});
add_shortcode('contact_email', function () {
    if (get_field('contact_email', 'options')) {
        return '<a href="mailto:' . get_field('contact_email', 'options') . '">' . get_field('contact_email', 'options') . '</a>';
    }
    return;
});
add_shortcode('contact_email_icon', function () {
    if (get_field('contact_email', 'options')) {
        return '<a href="mailto:' . get_field('contact_email', 'options') . '"><i class="fa-solid fa-envelope"></i></a>';
    }
    return;
});
add_shortcode('social_fb_icon', function () {
    $social = get_field('social', 'options');
    $fburl = $social['facebook_url'];
    if ($fburl != '') {
        return '<a href="' . $fburl . '" target="_blank"><i class="fa-brands fa-facebook"></i></a>';
    }
    return;
});
add_shortcode('social_ig_icon', function () {
    $social = get_field('social', 'options');
    $igurl = $social['instagram_url'];
    if ($igurl != '') {
        return '<a href="' . $igurl . '" target="_blank"><i class="fa-brands fa-instagram"></i></a>';
    }
    return;
});
add_shortcode('social_tw_icon', function () {
    $social = get_field('social', 'options');
    $twurl = $social['twitter_url'];
    if ($twurl != '') {
        return '<a href="' . $twurl . '" target="_blank"><i class="fa-brands fa-twitter"></i></a>';
    }
    return;
});
add_shortcode('social_pt_icon', function () {
    $social = get_field('social', 'options');
    $pturl = $social['pinterest_url'];
    if ($pturl != '') {
        return '<a href="' . $pturl . '" target="_blank"><i class="fa-brands fa-pinterest"></i></a>';
    }
    return;
});
add_shortcode('social_yt_icon', function () {
    $social = get_field('social', 'options');
    $yturl = $social['youtube_url'];
    if ($yturl != '') {
        return '<a href="' . $yturl . '" target="_blank"><i class="fa-brands fa-youtube"></i></a>';
    }
    return;
});
add_shortcode('social_in_icon', function () {
    $social = get_field('social', 'options');
    $inurl = $social['linkedin_url'];
    if ($inurl != '') {
        return '<a href="' . $inurl . '" target="_blank"><i class="fa-brands fa-linkedin"></i></a>';
    }
    return;
});
add_shortcode('social_gp_icon', function () {
    $social = get_field('social', 'options');
    $gpurl = $social['google_url'];
    if ($gpurl != '') {
        return '<a href="' . $gpurl . '" target="_blank"><i class="fas fa-globe-americas"></i></a>';
    }
    return;
});


/**
 * Grab the specified data like Thumbnail URL of a publicly embeddable video hosted on Vimeo.
 *
 * @param  str $video_id The ID of a Vimeo video.
 * @param  str $data 	  Video data to be fetched
 * @return str            The specified data
 */
function get_vimeo_data_from_id($video_id, $data)
{
    // width can be 100, 200, 295, 640, 960 or 1280
    $request = wp_remote_get('https://vimeo.com/api/oembed.json?url=https://vimeo.com/' . $video_id . '&width=960');
    
    $response = wp_remote_retrieve_body($request);
    
    $video_array = json_decode($response, true);
    
    // return $video_array;
    return $video_array[$data];
}


function gb_gutenberg_admin_styles()
{
    echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1040px;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1080px;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }	
        </style>
    ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');


// disable full-screen editor view by default
if (is_admin()) {
    function jba_disable_editor_fullscreen_by_default()
    {
        $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
        wp_add_inline_script('wp-blocks', $script);
    }
    add_action('enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default');
}



// God I hate Gravity Forms
// Change textarea rows to 4 instead of 10
add_filter('gform_field_content', function ($field_content, $field) {
    if ($field->type == 'textarea') {
        return str_replace("rows='10'", "rows='4'", $field_content);
    }
    return $field_content;
}, 10, 2);


function get_the_top_ancestor_id()
{
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    } else {
        return $post->ID;
    }
}

function cb_json_encode($string)
{
    // $value = json_encode($string);
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $string);
    $result = json_encode($result);
    return $result;
}

function cb_time_to_8601($string)
{
    $time = explode(':', $string);
    $output = 'PT' . $time[0] . 'H' . $time[1] . 'M' . $time[2] . 'S';
    return $output;
}


function cbdump($var)
{
    // ob_start();
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    return; // ob_get_clean();
}

function cbslugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function random_str(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

function cb_social_share($id)
{
    ob_start();
    $url = get_the_permalink($id);

    ?>
<div class="social-share border-top border-bottom py-2 my-4">
    <span class="h5 fw-bold">Share:</span>
    <a target='_blank' href='https://twitter.com/share?url=<?=$url?>'
        class="px-2"><i class='fa-brands fa-twitter'></i></a>
    <a target='_blank'
        href='http://www.linkedin.com/shareArticle?url=<?=$url?>'
        class="px-2"><i class='fa-brands fa-linkedin-in'></i></a>
    <a target='_blank'
        href='http://www.facebook.com/sharer.php?u=<?=$url?>'
        class="px-2"><i class='fa-brands fa-facebook-f'></i></a>
</div>
<?php
    
    $out = ob_get_clean();
    return $out;
}


function enable_strict_transport_security_hsts_header()
{
    header('Strict-Transport-Security: max-age=31536000');
}
add_action('send_headers', 'enable_strict_transport_security_hsts_header');


function cb_list($field)
{
    ob_start();
    $field = strip_tags($field, '<br />');
    $bullets = preg_split("/\r\n|\n|\r/", $field);
    foreach ($bullets as $b) {
        if ($b == '') {
            continue;
        }
        ?>
<li><?=$b?></li>
<?php
    }
    return ob_get_clean();
}

function cb_icon_list($field, $icon)
{
    ob_start();
    $field = strip_tags($field, '<br />');
    $bullets = preg_split("/\r\n|\n|\r/", $field);
    foreach ($bullets as $b) {
        if ($b == '') {
            continue;
        }
        ?>
<li><span class="fa-li"><i class="<?=$icon?>"></i></span> <?=$b?></li>
<?php
    }
    return ob_get_clean();
}

/**
 * formatBytes
 *
 * Returns img tag with srcset.
 *
 * @param	string $size
 * @param	int    $precision
 * @return	string
 */
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}


/**
 * cb_featured_image
 *
 * Returns img tag with srcset.
 *
 * @param	string $id The post ID.
 * @return	string
 */
function cb_featured_image($id)
{
    $tag = get_the_post_thumbnail(
        $id,
        'full',
        array(
            'srcset' => wp_get_attachment_image_url(get_post_thumbnail_id(), 'medium') . ' 480w, ' .
                wp_get_attachment_image_url(get_post_thumbnail_id(), 'large') . ' 640w, ' .
                wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') . ' 960w'
        )
    );
    return $tag;
}

// REMOVE TAG AND COMMENT SUPPORT

// Disable Tags Dashboard WP
add_action('admin_menu', 'my_remove_sub_menus');

function my_remove_sub_menus()
{
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}
// Remove tags support from posts
function myprefix_unregister_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

function remove_comments()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'remove_comments');


function estimate_reading_time_in_minutes($content = '', $words_per_minute = 300, $with_gutenberg = false, $formatted = false)
{
    // In case if content is build with gutenberg parse blocks
    if ($with_gutenberg) {
        $blocks = parse_blocks($content);
        $contentHtml = '';

        foreach ($blocks as $block) {
            $contentHtml .= render_block($block);
        }

        $content = $contentHtml;
    }
            
    // Remove HTML tags from string
    $content = wp_strip_all_tags($content);
            
    // When content is empty return 0
    if (!$content) {
        return 0;
    }
            
    // Count words containing string
    $words_count = str_word_count($content);
            
    // Calculate time for read all words and round
    $minutes = ceil($words_count / $words_per_minute);
    
    if ($formatted) {
        $minutes = '<p class="reading">Estimated reading time ' . $minutes . ' ' . pluralise($minutes, 'minute') . '</p>';
    }

    return $minutes;
}

function pluralise($quantity, $singular, $plural=null)
{
    if($quantity==1 || !strlen($singular)) {
        return $singular;
    }
    if($plural!==null) {
        return $plural;
    }

    $last_letter = strtolower($singular[strlen($singular)-1]);
    switch($last_letter) {
        case 'y':
            return substr($singular, 0, -1).'ies';
        case 's':
            return $singular.'es';
        default:
            return $singular.'s';
    }
}

add_shortcode( 'calc_shortcode', 'calc_shortcode' );
function calc_shortcode() {
ob_start();
$classes = $block['className'] ?? null;
?>
<section class="calculator has-grey-400-background-color py-5 <?=$classes?>">
    <div class="container-xl">
        <div class="preTitle text-center">WHAT DOES IT MEAN FOR ME?</div>
        <h2 class="mb-5 text-center">Compare the costs</h2>
        <div class="calcContainer p-4">
            <div class="row g-4">
                <div class="col-12">
                    <div>Your House Valuation</div>
                    <div id="valuation"></div>
                    <label for="price" class="visually-hidden">Price</label>
                    <input type="range" class="form-range" min="1" max="5" id="price" value="1">
                </div>
                <div class="col-md-6">
                    <div id="esLabel" class="fw-bold">Typical<br>Estate Agent</div>
                    <div id="esPrice"></div>
                </div>
                <div class="col-md-6">
                    <div id="bmLogo">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/bm-logo.svg" width=300 height=60 alt="Bettermove">
                        <span class="fa-stack" style="vertical-align:top;" type="button" data-bs-toggle="modal" data-bs-target="#calcDetail">
                            <i class="fa-regular fa-circle fa-stack-2x"></i>
                            <i class="fa-solid fa-info fa-stack-1x"></i>
                        </span>
                    </div>
                    <div id="bmPrice"></div>
                </div>
                <div class="col-12">
                    <div id="diff" class="text-center"></div>
                </div>
                <div class="col-12 text-center">
                    <a href="/get-offer/" class="btn btn-primary btn-arrow">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="calcDetail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="h5 modal-title">Calculation Detail</div>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Calculation based on the market average time to sell being 7 months as per the UK current average (time to completion). This includes:
                <ul>
                    <li>True market valuation</li>
                    <li>Estate agent fees</li>
                    <li>Survey</li>
                    <li>Conveyancing Fees</li>
                    <li>Utility Bills</li>
                    <li>Council Tax</li>
                    <li>Mortgage Costs</li>
                    <li>Clearance & Clearing</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
add_action('wp_footer',function(){
    ?>
<script>
(function($){

    const outputs = [
        {
            esPrice: 87500,
            bmPrice: 90000,
            diff: '&pound;2,500 more and zero stress'
        },
        {
            esPrice: 175000,
            bmPrice: 180000,
            diff: '&pound;5,000 more and zero stress'
        },
        {
            esPrice: 262500,
            bmPrice: 270000,
            diff: '&pound;7,500 more and zero stress'
        },
        {
            esPrice: 350000,
            bmPrice: 360000,
            diff: '&pound;10,000 more and zero stress'
        },
        {
            esPrice: 437500,
            bmPrice: 450000,
            diff: '&pound;12,500 more and zero stress'
        }
    ];

    calculate();


    $('#price').on('input', calculate);

    function calculate(){
        var valuation = $('#price').val();
        var ix = valuation - 1;
        valuation = valuation * 100000;
        var diff = outputs[ix].esPrice - outputs[ix].bmPrice;

        $('#esPrice').html('&pound;'+outputs[ix].esPrice.toLocaleString('en-GB'));
        $('#bmPrice').html('&pound;'+outputs[ix].bmPrice.toLocaleString('en-GB'));
        $('#valuation').html('&pound;'+valuation.toLocaleString('en-GB'));
        $('#diff').html(outputs[ix].diff);
    }

})(jQuery);
</script>
    <?php
},9999);
return ob_get_clean();
}
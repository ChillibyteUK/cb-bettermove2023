<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onExitModal">
  Launch  modal
</button>

<div class="modal" tabindex="-1" id="onExitModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" id="onExitModalClose" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
        </div>
    </div>
</div>
<?php
add_action('wp_footer',function() {
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    window.bootstrap = bootstrap;
    const myModal = new bootstrap.Modal('#onExitModal');
    document.addEventListener("mouseout", (e) => {
        if (!e.toElement && !e.relatedTarget) {
           myModal.show();
        }
    });
</script>
    <?php
});
<div class="c-banner-video relative">

    <?php
    $video = wp_get_attachment_url( 93 );
    $poster = wp_get_attachment_url( 68 );
    ?>

    <div class="w-full overflow-hidden">
        <video class="w-full h-full object-cover" poster="<?= $poster; ?>" autoplay="" loop="" muted="" style="transform: translate3d(0px, 0px, 0px);">
            <source src="<?= $video; ?>">
        </video>
         <!-- Overlay de opacidade -->
        <div class="absolute inset-0 bg-primary/60 hidden"></div>
    </div>

</div>
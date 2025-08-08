<?php
/**
 * Breadcrumbs plugin Yoast SEO
 */
?>

<div class="inline-flex">
    <?php if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
    } ?>
</div>
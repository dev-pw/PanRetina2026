<div id="js-changeLang" class="fixed size-full inset-0 bg-[url(../../../../uploads/banner-home.png)] bg-cover max-lg:bg-left xl:bg-center z-60 transition opacity-0 invisible">
    <div class="container h-full">
        <div class="flex max-md:flex-col max-xl:justify-center gap-y-10 md:gap-50 h-full items-center">

        <img src="<?= get_option('options_logo_header'); ?>" class="w-40 md:w-76 object-contain max-md:mx-auto">

        <ul class="l-polylang flex md:flex-col gap-3">
            <?php // language polylang
            pll_the_languages( array(
                'show_flags'   => 1,
                'show_names'   => 0,
                'hide_current' => 0,
                'display_names_as' => 'slug'
                ) ); 
            ?>
        </ul>
        </div>
    </div>
</div>

<script>
window.__CURRENT_LANG__ = ""; // útil no JS
window.__IS_FRONT__ = <?= is_front_page() ? 'true' : 'false' ?>; // opcional
</script>
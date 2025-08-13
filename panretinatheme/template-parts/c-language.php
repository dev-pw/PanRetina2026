<?php

$languages = pll_the_languages(array(
    'show_flags' => 1,
    'show_names' => 0,
    'hide_if_empty' => 0,
    'force_home' => 0,
    'hide_current' => 0,
    'post_id' => null,
    'raw' => 1 // Retorna array ao invés de HTML
));

// Pega apenas o idioma atual
$current_lang_slug = pll_current_language();
$current_language = $languages[$current_lang_slug];

$flag = $current_language['flag'];
$slug = $current_language['slug'];

?>

<div id="js-toggleLang" class="l-lang cursor-pointer rounded-xl border-1 border-white py-3 px-4 flex gap-3 items-center">
    <div class="lang-image image-<?= $slug; ?>">
        <?= $flag; ?>
    </div>
    <p class="text-white uppercase font-black"> <?= $slug; ?> </p>
</div>

<ul class="l-polylang inline-flex gap-3 !hidden">
    <?php // language polylang
        pll_the_languages( array(
        'show_flags'   => 1,
        'show_names'   => 0,
        'hide_current' => 0,
        'display_names_as' => 'slug'
    ) ); ?>
</ul>


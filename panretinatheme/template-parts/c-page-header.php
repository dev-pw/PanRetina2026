<?php

// Página específica (page)
if (is_page()) {
    $title = get_the_title();
}
// Página inicial do blog
elseif (is_home()) {
    $title = get_the_title(get_option('page_for_posts'));
}
// Página de erro 404
elseif (is_404()) {
    $title = 'Página não encontrada';
}
// Página de pesquisa
elseif (is_search() || (is_search() && get_post_type()) ) {
    $title = 'Pesquisa';
}
// Página de arquivo (categorias, tags, custom post types)
elseif (is_archive() || is_category()) {
    $title = get_the_archive_title();
}
// Post único (single) com exceção de custom post types
elseif (is_single() && get_post_type() === 'cases') {
    $title = 'Cases de sucesso';
}
elseif (is_single() && get_post_type() === 'post') {
    $title = 'Notícia';
}
// Para qualquer outro caso (incluindo custom post types)
else {
    $title = get_the_title();
}

?>

<!--Page Header Start-->
<header class="pt-10 pb-8 bg-linear-to-l from-[#CF9841] to-[#DEB148] text-white">
    <div class="container">
        <div class="text-center">
            <h2 class="text-white"> <?= $title; ?> </h2>
            <?php if(!is_single() || get_post_type() !== 'post' ) :
            get_template_part('template-parts/c-breadcrumbs');
            endif; ?>
        </div>
    </div>
</header>
<!--Page Header End-->
<?php

// Obtém o valor enviado via GET para 'post_type', ou define como padrão 'post'
$post_type = get_query_var('post_type') ? get_query_var('post_type') : 'post';
// $post_type = get_query_var('category_name') ? get_query_var('category_name') : 'post';

$value = $post_type;
$name = 'post_type';

// Verifica se está na página inicial
if (is_home()) {
    $value = 'post';
}

// Verifica se o tipo de post atual é 'especialidades'
if (get_post_type()) {
    $value = get_post_type();
}

// Se estiver dentro de uma taxonomia específica
if (is_tax() || is_category()) {
    $term = get_queried_object();
    if ($term && isset($term->slug)) {
        $value = $term->slug;
        $name = 'category_name';
    }
}

?>


<form role="search" method="get" id="searchform" class="relative" action="<?= bloginfo('url'); ?>/">
    <input type="text" class="peer/search bg-gray-50 rounded-md p-4 ps-13 pe-12 text-dark text-md w-full border-gray-400 border-2 outline-0" name="s" id="search" placeholder="Pesquise aqui" value="<?= the_search_query(); ?>"/>
    <label for="search" class="absolute left-5 top-5 text-dark"> 
        <span class="icon-magnifying-glass-solid transition-all duration-300 text-xl"></span> 
    </label>

    <label for="reset" class="absolute right-5 z-10 top-5 text-white invisible peer-focus/search:visible"> 
        <span class="icon-clear transition-all duration-300 text-xl text-gray-700"></span> 
    </label>

    <input type="reset" id="reset" class="hidden"/>
    <input type="submit" value="<?= $value; ?>" name="<?= $name; ?>" id="send" class="hidden"/>
</form>

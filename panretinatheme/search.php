<?php
/**
 * Search
 *
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 global $wp_query;

 $post_type = get_query_var('post_type');
 
 if ($post_type === '') :
	 if ($wp_query->have_posts()) :
		 get_template_part('searchs/tp-search-');
	 else :
		 get_template_part('searchs/tp-search-'); // Manter o template, já que ele tem o else dentro
	 endif;
 else :
	 if ($wp_query->have_posts()) :
		 get_template_part('searchs/tp-search');
	 else :
		 get_template_part('searchs/tp-search'); // Mesma lógica para outro post type
	 endif;
 endif;
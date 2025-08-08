<?php
/**
 * Single
 *
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 if(get_post_type() === '') :
	
	get_template_part('singles/single-');
	
 else:
	
	get_template_part('singles/tp-single');
	
 endif;

<?php
/**
 * Archive
 *
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 if(get_post_type() === '') :
	
	get_template_part('archives/archive-');

	
 else:
	
	get_template_part('archives/tp-archive');
	
 endif;
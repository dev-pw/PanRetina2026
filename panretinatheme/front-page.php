<?php

/**
 * Front-page
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 get_header();

 echo '<main role="main">';

 get_template_part('template-parts/ft-banner-home');
 get_template_part('template-parts/ft-botoes');
 get_template_part('template-parts/ft-cronometro');
 get_template_part('template-parts/ft-mensagem');
 get_template_part('template-parts/ft-palestrantes');
 get_template_part('template-parts/ft-inscricao');
 get_template_part('template-parts/ft-local');
 get_template_part('template-parts/ft-banners');

 echo '</main>';

 get_footer(); ?>
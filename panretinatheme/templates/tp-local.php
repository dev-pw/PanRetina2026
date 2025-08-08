<?php
/**
 * Template Name: Local
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage pwtheme
 *
*/

get_header();

?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="pt-20">
        <div class="container">

           <?= get_template_part('template-parts/ft-local'); ?>
        
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.746881597821!2d-46.718861999999994!3d-23.649234199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5106269d13b1%3A0x1fe4bbc63e7fbe41!2sTransamerica%20Expo%20Center!5e0!3m2!1spt-BR!2sbr!4v1754492347975!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</main>

<?php get_footer(); ?>


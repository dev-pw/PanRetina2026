<?php
/**
 * Page
 *
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 get_header(); ?>

 <main role="main">
 
    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="py-20">
        <div class="container">

            <?php if (have_posts()):while (have_posts()):the_post(); ?>
            <article id="article-id-<?php the_id(); ?>" <?php post_class(); ?>>
                <div class="entry-content-post">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; endif; ?>

        </div>
    </div>
 
 </main>
 
 <?php get_footer(); ?>

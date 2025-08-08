<?php
/**
 * Archive
 *
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

 get_header();

 ?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="py-20">

        <div class="container">

            <?php
            if (have_posts()): ?>

            <div class="mb-10">
                <!-- <p class="fs-5 fw-bold lh-base mb-3 text-primary">Pesquisar</p> -->
                <?php get_search_form(); ?>
            </div>

            <div class="grid grid-cols-12 gap-y-8 sm:gap-8">

                <?php while (have_posts()):the_post(); ?>
                <article id="article-id-<?php the_id(); ?>" <?php post_class('col-span-12 md:col-span-6 lg:col-span-4'); ?>>
                    <?php get_template_part('template-parts/c-card-post'); ?>
                </article>
                <?php endwhile; ?>
            </div>

            <div class="flex justify-center mt-10">
                <?php paging_nav(); ?>
            </div>


            <?php else: ?>

            <div>
                <p class="c-bloco-mensagem c-bloco-mensagem__primary mb-4">Sem posts cadastrados no momento</p>
                <a href="<?php bloginfo('url'); ?>" title="Página inicial" class="btn-secondary">Home</a>
            </div>

            <?php endif;
            wp_reset_query(); ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
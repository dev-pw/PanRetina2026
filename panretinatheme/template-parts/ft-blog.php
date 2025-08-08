<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
);

$blog = new WP_Query($args);

$categories = get_categories( array(
	'orderby'      => 'name',
	'order'        => 'ASC',
    'hide_empty'   => false,
    'exclude'      => '1'
) );

?>

<section class="py-20 bg-gradient-to-b from-gray-100 from-50% to-primary to-50%">
    <div class="container">
        <div class="grid grid-cols-12 items-center gap-5">

            <div class="col-span-12 lg:col-span-4 order-1">
                <div class="mb-3 text-center lg:text-start">
                    <p class="text-primary text-xl uppercase">Fique por dentro das</p>
                    <h2 class="text-primary ps-15 uppercase">Novidades</h2>
                </div>
            </div>

            <div class="col-span-12 lg:col-start-6 lg:col-span-7 xl:col-start-8 xl:col-span-5 order-2">
                <p class="text-center lg:text-end"> Acompanhe dicas, tendências e informações técnicas sobre climatização, engenharia predial e soluções para condomínios </p>
            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-5 xl:col-span-4 order-3 text-center md:text-start">
                <?php foreach ($categories as $key => $category) : ?>
                <a href="<?= get_category_link( $category->term_id ); ?>" class="inline-block p-3 sm:p-5 border-b-2 border-dark text-dark transition-all duration-300 hover:text-secondary hover:border-secondary">
                    <?= $category->name; ?>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="col-span-12 md:col-start-10 md:col-span-3 lg:col-start-11 lg:col-span-2 order-5 md:order-4 text-center md:text-end">
                <a href="<?= get_post_type_archive_link('post'); ?>" class="btn-secondary" rel="noopener noreferrer"> Ver todos </a>
            </div>

            <div class="col-span-12 order-4 md:order-5">
                <?php if ($blog->have_posts()) : ?>
                <div class="swiper blog mt-10">
                    
                    <div class="swiper-wrapper">
                        <?php while ($blog->have_posts()) : $blog->the_post(); ?>

                        <div class="swiper-slide">
                            <?php get_template_part('template-parts/c-card-post'); ?>
                        </div>
                        
                        <?php endwhile; ?> 
                    </div>
                    
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <?php else: ?>
                
                <p class="bg-gray-100 p-4 text-dark mt-10 rounded-xl"> Nenhuma postagem cadastrada no momento. </p>

                <?php endif; wp_reset_postdata(); ?>
            </div>

        </div>
    </div>
</section>

<!-- Initialize Swiper -->
<script>
    jQuery(document).ready(function($) {
        // SWIPER
        const blog = new Swiper('.swiper.blog', {
            // Optional parameters
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1199: {
                    slidesPerView: 3,
                },
            },

        });
        
    });
</script>
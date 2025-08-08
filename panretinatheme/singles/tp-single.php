<?php

$id_post = get_the_ID();
 $post_type = get_post_type();
 $args = array(
	'post_type' => '' . $post_type . '',
	'posts_per_page' => 2,
	'post__not_in' => array($id_post),
 );
 $blog = new WP_Query ($args);

get_header(); ?>

<main role="main">

 	<?= get_template_part('template-parts/c-page-header'); ?>

	<div class="container">
		
		<div class="pt-10 pb-20 md:py-20 mx-auto">

			<div class="grid grid-cols-12 justify-center">
				
				<div class="col-span-12 lg:col-span-10 lg:col-start-1 xl:col-span-8 xl:col-start-3 transition-all">
					
					<?php get_template_part('template-parts/c-breadcrumbs'); ?>

					<h1 class="h3 mt-5 text-primary"> <?= the_title(); ?></h1>
					
					<section class="mt-8 border-b-2 border-gray-300 pb-8">
						<div class="hidden">
							<?= get_the_date('d/m/Y'); ?>
							<?= the_category(', '); ?>
						</div>
						<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<article id="article-id-<?php the_id(); ?>" <?php post_class(); ?>>
							<div class="entry-content-post">
								<?php the_content(); ?>
							</div>
						</article>
						<?php endwhile; endif; ?>
					</section>
					
					<?php if ($blog->have_posts()) : ?>
					
					<section class="mt-10">
						<p class="text-xl text-primary font-bold mb-8">Postagens Relacionadas</p>
					
						<div class="grid xl:grid-cols-2 gap-6">
					
							<?php while($blog->have_posts()) : $blog->the_post(); ?>
							<article id="article-id-<?php the_id(); ?>" <?php post_class(''); ?>>
							<?php get_template_part('template-parts/c-card-post'); ?>
							</article>
							<?php endwhile; ?>
					
						</div>
					</section>
					
					<?php endif; wp_reset_postdata(); ?>
				</div>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
<?php
/**
 * 404
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
            <section class="xl:w-240 pt-14 mx-auto text-center">
                <p class="font-bold text-2xl mb-4"> <?= is_language('Oops. Looks like this page doesn t exist.', 'Ups. Parece que esta página no existe.', 'Opps. Parece que esta página não existe.'); ?></p>
                <p> <?= is_language('Try searching for your answer or send us a message.', 'Intente buscar su respuesta o envíenos un mensaje.', 'Tente procurar sua resposta ou envie-nos uma mensagem.'); ?> </p>
                <a href="<?= bloginfo('url'); ?>" class="btn-gradient"> <?= is_language('Home', 'Página de inicio', 'Página Inicial'); ?> </a>
            </section>
        </div>
    </div>

</main>

<?php get_footer(); ?>

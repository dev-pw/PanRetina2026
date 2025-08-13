<?php
/**
 * Template Name: Inscrição
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage pwtheme
 *
*/

get_header();

?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="py-20">
        <div class="container">

            <div class="">

                <?= get_template_part('template-parts/c-table'); ?>

            </div>
        </div>

        <div class='bg-gray-100 my-20'>
            <div class="container text-center py-20">
                <h2 class="text-primary"> <?= is_language('PAYMENT METHOD', 'MÉTODO DE PAGO', 'FORMA DE PAGAMENTO') ?> </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-12">

                    <div class="col-md-4">
                        <span class="icon-credit-cards text-primary text-7xl"></span>
                        <h3 class="m-0 text-primary text-base mt-6"> <?= is_language('Credit Card', 'Tarjeta de crédito', 'Cartão de Crédito'); ?> </h3>
                        <p class="text-sm font-light"> ( <?= is_language('all nationalities', 'todas las nacionalidades', 'todas as nacionalidades'); ?> ) </p>
                    </div>

                    <div class="col-md-4">
                        <span class="icon-credit-card text-primary text-7xl"></span>
                        <h3 class="m-0 text-primary text-base mt-6"> <?= is_language('Debit Card', 'Tarjeta de débito', 'Cartão de Débito');  ?> </h3>
                        <p class="text-sm font-light"> ( <?= is_language('Brazilians only', 'sólo brasileños', 'apenas brasileiros');  ?> ) </p>
                    </div>

                    <div class="col-md-4">
                        <span class="icon-bill text-primary text-7xl"></span>
                        <h3 class="m-0 text-primary text-base mt-6"> <?= is_language('Bank Slip', 'Boleto Bancário'); ?> </h3>
                        <p class="text-sm font-light"> ( <?= is_language('Brazilians only', 'sólo brasileños', 'apenas brasileiros'); ?> ) </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="entry-content-post">
                <?= the_content(); ?>
            </div>

            <a href="https://atep.iweventos.com.br/evento/retina2026/home" target="_blank" class="btn-primary text-lg text-white px-12"> <?= is_language('Registration Form', 'Formulario de inscripción', 'Formulário de Inscrição') ;?> </a>

        </div>

    </div>

</main>

<?php get_footer(); ?>


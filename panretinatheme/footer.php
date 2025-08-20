<?php
/**
 * Footer
 * @package WordPress
 * @subpackage panretinatheme
 *
*/

?>

<section class="bg-primary pt-20 py-10">
    <div class="container text-white">

        <div class="flex justify-between flex-wrap gap-y-10 xl:gap-y-0 lg:gap-x-1">

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">

                <img src="<?= get_option('options_logo_footer'); ?>" class="object-contain max-md:mx-auto w-76" alt="Logo <?= bloginfo('name'); ?>">

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <p class="h6 text-sm text-secondary mb-6 uppercase"> <?= is_language('Venue', 'Local', 'Local do Evento') ; ?> </p>

                <p class="text-white mt-7 max-w-75 font-bold mx-auto md:mx-0 text-sm"><?= get_option('options_info_2'); ?></p>

                <div class="space-x-4 mt-7">
                    <a href="<?= get_option('options_info_6'); ?>" class="btn-outline-white text-sm py-1 px-4"> Waze </a>
                    <a href="<?= get_option('options_info_5'); ?>" class="btn-outline-white text-sm py-1 px-4"> Maps </a>
                </div>

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <p class="h6 text-sm text-secondary mb-6 uppercase"> <?= is_language('Executive Secretariat', 'Secretaría Ejecutiva', 'Secretaria Executiva') ; ?> </p>

                <?= wp_get_attachment_image(12, 'full', '', ['class' => 'h-12 object-contain max-md:mx-auto w-40']); ?>

                <div class="mt-10">
                    <p><a href="httpa://wa.me/5511941665049" target="_blank" class="text-sm">+55 1194166 5049</a></p>
                    <p><a href="mailto:contato@atepeventos.com.br" target="_blank" class="text-sm">contato@atepeventos.com.br</a></p>
                </div>

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <p class="h6 text-sm text-secondary mb-6 uppercase"> <?= is_language('Official Agency', 'Agencia Oficial', 'Agência Oficial'); ?></p>

                <?= wp_get_attachment_image(12, 'full', '', ['class' => 'h-12 object-contain mx-auto sm:mx-0 w-40']); ?>

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <p class="h6 text-sm text-secondary mb-6 uppercase"> <?= is_language('Presented By', 'Realización', 'Realização'); ?> </p>

                <div class="flex flex-row 2xl:flex-row gap-3">
                    <?= wp_get_attachment_image(21, 'full', '', ['class' => 'mx-auto sm:mx-0 w-20 2xl:w-25 object-contain']); ?>
                </div>

            </div>
            
        </div>
    </section>
    
<section class="bg-primary-dark py-5">
    <div class="container">
        <p class="font-bold text-center text-sm text-white"> <span class="uppercase">Responsável Técnico</span>: Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
    </div>
</section>

<footer class="py-4 bg-secondary">
    <div class="container">

        <div class="flex flex-wrap flex-col lg:flex-row gap-5 items-center justify-between relative z-1">
            
            <div class="flex items-center gap-2 btn-rs">
                <?= get_template_part('template-parts/c-redes-sociais'); ?>
            </div>

            <p class="text-white font-bold text-sm text-center lg:absolute inset-auto -z-1 lg:w-full"> © Copyright <?= bloginfo('name'); ?> - <?= is_language('All rights reserved', 'Reservados todos los derechos', 'Todos os direitos reservados') ; ?> </p>

            <div class="auto-cols-auto">
                <a href="https://planetaw.ag/" title="Planeta W - Design + Web" target="_blank" class="text-sm" id="logo-pw">
                    <?= wp_get_attachment_image( 8, 'full', "", ["class" => "mx-auto lg:mx-0 lg:ms-auto"]); ?>
                </a>
            </div>

        </div>

    </div>
</footer>

</div><!-- WRAPPER SITE -->

<?php 

// get_template_part('template-parts/c-whatsapp'); 
get_template_part('inc/modal-retorno'); 

?>

<?php wp_footer(); ?>

</body>
</html>

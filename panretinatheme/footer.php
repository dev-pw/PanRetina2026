<?php
/**
 * Footer
 * @package WordPress
 * @subpackage panretinatheme
 *
*/

?>

<section class="bg-primary pt-20 py-10">
    <div class="container text-white relative before:absolute before:-top-34 before:right-0 before:bg-[url(../../../../uploads/elemento-quality.png)] before:no-repeat before:bg-cover before:w-57 before:h-28 before:z-1">

        <div class="flex justify-between flex-wrap gap-y-10 xl:gap-y-0 lg:gap-x-1">

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <h6 class="text-sm text-secondary mb-8 uppercase"> <?= is_language_en('Venue', 'Local do Evento') ; ?> </h6>

                <?= wp_get_attachment_image(23, 'full', '', ['class' => 'h-12 object-contain mx-auto sm:mx-0 w-50']); ?>

                <p class="text-secondary mt-7 max-w-75 font-bold mx-auto md:mx-0 text-sm"><?= get_option('options_info_2'); ?></p>

                <div class="space-x-4 mt-7">
                    <a href="<?= get_option('options_info_6'); ?>" class="btn-outline-white text-sm"> Waze </a>
                    <a href="<?= get_option('options_info_5'); ?>" class="btn-outline-white text-sm"> Maps </a>
                </div>

            </div>
            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <h6 class="text-sm text-secondary mb-8 uppercase"> <?= is_language_en('Executive Secretariat', 'Secretaria Executiva') ; ?> </h6>

                <?= wp_get_attachment_image(22, 'full', '', ['class' => 'h-12 object-contain mx-auto sm:mx-0 ']); ?>

                <div class="mt-10">
                    <p><a href="httpa://wa.me/5511941665049" target="_blank" class="text-sm">+55 1194166 5049</a></p>
                    <p><a href="mailto:contato@atepeventos.com.br" target="_blank" class="text-sm">contato@atepeventos.com.br</a></p>
                </div>

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <h6 class="text-sm text-secondary mb-8 uppercase"> <?= is_language_en('Official Tourism Agency', 'Agência de Turismo Oficial'); ?></h6>

                <a href="https://singularis.tur.br/" target="_blank" rel="noopener noreferrer"><?= wp_get_attachment_image(21, 'full', '', ['class' => 'h-12 object-contain mx-auto sm:mx-0 w-40']); ?></a>

                <div class="mt-10">
                    <p><a href="httpa://wa.me/5511941665049" target="_blank" class="text-sm">+55 21 3547 1680</a></p>
                    <p><a href="mailto:atendimento@sbrv.org.br" target="_blank" class="text-sm">atendimento@sbrv.org.br</a></p>
                </div>

            </div>

            <div class="w-full sm:w-[48%] xl:w-auto text-center sm:text-start">
                <h6 class="text-sm text-secondary mb-8 uppercase"> <?= is_language_en('Presented By', 'Realização'); ?> </h6>

                <div class="flex flex-row 2xl:flex-row gap-3 h-12">
                    <?= wp_get_attachment_image(19, 'full', '', ['class' => 'mx-auto sm:mx-0 w-40 2xl:w-50 object-contain']); ?>
                    <div class="w-[2px] rounded-xl bg-white/20 hidden sm:block"></div>
                    <?= wp_get_attachment_image(18, 'full', '', ['class' => 'mx-auto sm:mx-0 w-40 2xl:w-50 object-contain']); ?>
                </div>

                <div class="mt-10">
                    <p><a href="httpa://wa.me/5511993246969" target="_blank" class="text-sm">+55 11 99324 6969</a></p>
                    <p><a href="mailto:atendimento@sbrv.org.br" target="_blank" class="text-sm">atendimento@sbrv.org.br</a></p>
                </div>

            </div>

            <div class="w-full text-center mt-13">
                <p class="font-bold">Responsável Técnico Médico: Dr. Octaviano Magalhães Jr - CRM-SP 96249</p>
            </div>

        </div>

    </div>
</section>

<footer class="py-5 bg-secondary">
    <div class="container">

        <div class="flex flex-wrap flex-col lg:flex-row gap-5 items-center justify-end relative z-1">
            <p class="text-primary font-bold text-center lg:absolute inset-auto -z-1 lg:w-full"> © Copyright <?= bloginfo('name'); ?> - <?= is_language_en('All rights reserved', 'Todos os direitos reservados') ; ?> </p>
            <div class="auto-cols-auto">
                <a href="https://planetaw.ag/" title="Planeta W - Design + Web" target="_blank" class="text-sm" id="logo-pw">
                    <?= wp_get_attachment_image( 15, 'full', "", ["class" => "mx-auto lg:mx-0 lg:ms-auto"]); ?>
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

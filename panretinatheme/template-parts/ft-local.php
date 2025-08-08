<section class="relative py-20">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center justify-between">

            <div class="auto-cols-fr relative lg:absolute 2xl:relative top-0 left-0 lg:w-[50%] 2xl:w-full">
                <img src="<?= wp_get_attachment_image_src(43, 'full')[0]; ?>" class="object-cover w-full lg:h-101 xl:h-93 2xl-h-full -scale-x-100 rounded-xl lg:rounded-none 2xl:rounded-xl" alt="">
            </div>

            <div class="auto-cols-fr lg:col-start-2 lg:ms-5 2xl:ms-0">

                <h2 class="text-primary h5 !font-normal"> <?= is_language_en('Venue', 'Local do Evento'); ?> </h2>
                
                <p class="mt-5 mb-6 text-primary h4"> <?= get_option('options_info_2'); ?> </p>

                <div class="space-x-4 mt-7">
                    <a href="<?= get_option('options_info_6'); ?>" class="btn-outline-primary"> Waze </a>
                    <a href="<?= get_option('options_info_5'); ?>" class="btn-outline-primary"> Maps </a>
                </div>

            </div>

        </div>
    </div>
</section>
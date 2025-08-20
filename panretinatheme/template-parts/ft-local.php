<section class="relative py-20">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 rounded-xl overflow-hidden">

            <div class="auto-cols-fr relative">
                <img src="<?= wp_get_attachment_image_src(42, 'full')[0]; ?>" class="object-cover w-full h-60 lg:h-80" alt="">
            </div>

            <div class="auto-cols-fr lg:col-start-2 bg-primary p-10">

                <div class="flex items-center relative h-full before:content-['\e92d'] before:font-['icomoon'] before:text-white before:bg-secondary before:absolute before:-top-3 before:-right-3 before:size-12 before:text-xl before:flex before:items-center before:justify-center before:rounded-xl">
                    <img src="<?= wp_get_attachment_image_src(41, 'full')[0]; ?>" class="max-lg:hidden w-60 -ms-32" alt="<?= is_language('Location', 'Ubicación', 'Localização'); ?>">
                    
                    <div class="lg:-ms-10">
                        <h2 class="text-white h3"> <?= is_language('Location', 'Ubicación', 'Localização'); ?> </h2>
                        
                        <p class="mt-5 mb-6 text-white"> <?= get_option('options_info_2'); ?> </p>
                        <div class="space-x-4 mt-7">
                            <a href="<?= get_option('options_info_6'); ?>" class="btn-outline-white px-6 py-2" title="Waze"> Waze </a>
                            <a href="<?= get_option('options_info_5'); ?>" class="btn-outline-white px-6 py-2" title="Maps"> Maps </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
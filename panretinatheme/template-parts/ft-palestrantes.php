<section id="js-palestrantes-swiper" class="py-20">
    <div class="container relative">

        <div class="text-primary mb-10">
            <p class="h3 !font-normal"> <?= is_language('Meet the', 'Conoce a los', 'Conheça os'); ?>  </p>
            <h2 class="h1 font-black"> <?= is_language('confirmed speakers', 'ponentes confirmados', 'palestrantes confirmados'); ?>  </h2>
        </div>

        <div class="swiper !static">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <?php for ($i = 0; $i < 6; $i ++) : ?>
                <div class="swiper-slide">

                    <div class="relative group/card transition-all duration-200 overflow-hidden rounded-full bg-secondary hover:bg-primary mx-auto size-80 lg:size-65 2xl:size-75">

                        <a href="<?= the_permalink(); ?>" title="<?= get_the_title(); ?>" class="relative">
                            <img src="<?= wp_get_attachment_image_src( 47, 'full')[0]; ?>" class="mx-auto" alt="<?= get_post(47)->post_title; ?>">
                        </a>
                        
                        <div class="flex items-center gap-2 absolute z-10 w-[70%] left-[14%] bottom-12 bg-white p-4 transition-all duration-200 rounded-2xl group-hover/card:-translate-y-5">
                            <img src="<?= wp_get_attachment_image_src( 10, 'full')[0]; ?>" class="border border-2 border-white rounded-full size-11" alt="">
                            <div>
                                <h4 class="text-base text-secondary font-black"> <?= is_language('Speaker Name', 'Nombre del orador', 'Nome do Palestrante'); ?> </h4>
                                <p class="text-sm"> <?= is_language('Ophthalmologist', 'Oftalmólogo', 'Oftalmmologista'); ?> </p>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <?php endfor; ?>

            </div>
    
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev font-black !text-primary !top-7 !right-18 !left-[initial]"></div>
            <div class="swiper-button-next font-black !text-primary !top-7"></div>

        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {

        // SWIPER
        const palestrante = new Swiper('#js-palestrantes-swiper .swiper', {
            // Optional parameters
            loop: false,
            spaceBetween: 20,

            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },

            // If we need pagination
            // pagination: {
            //     el: '#js-palestrantes-swiper .swiper-pagination',
            //     clickable: true,
            // },

            // Navigation arrows
            navigation: {
                nextEl: '#js-palestrantes-swiper .swiper-button-next',
                prevEl: '#js-palestrantes-swiper .swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                }
            },

        });

    });
</script>
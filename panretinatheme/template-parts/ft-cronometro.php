<section class="py-20">
    <div class="container relative">
        <img src="<?= wp_get_attachment_image_src(44, 'full')[0];?>" class="hidden lg:block absolute left-0 -top-4 xl:top-1 w-100" alt="">

        <div class="flex flex-col justify-between items-center space-y-12 lg:space-x-12 lg:flex-row lg:space-y-0 relative z-10">

            <div class="w-auto text-primary max-xl:text-center">
                <p class="mb-4 text-2xl lg:mb-2"> <?= is_language('Mark your calendar', 'Marca tu calendario', 'Marque na sua agenda'); ?></p>
                <h2 class="uppercase font-bold text-5xl mb-0"> <?= is_language('the event starts in', 'El evento comienza en', 'o evento começa em'); ?> </h2>
            </div>

            <div class="flex flex-col items-center justify-center text-[#E72C33]">
                <div class="flex justify-around space-x-4 text-center xl:space-x-12">
                    <div>
                        <div id="days" class="font-bold text-3xl md:text-4xl xl:text-7xl">0</div>
                        <div class="uppercase text-sm tracking-widest">  <?= is_language('Days', 'Días', 'Dias'); ?> </div>
                    </div>
                    <div>
                        <div id="hours" class="font-bold text-3xl md:text-4xl xl:text-7xl">0</div>
                        <div class="uppercase text-sm tracking-widest">  <?= is_language('Hours', 'Horas', 'Horas'); ?> </div>
                    </div>
                    <div>
                        <div id="minutes" class="font-bold text-3xl md:text-4xl xl:text-7xl">0</div>
                        <div class="uppercase text-sm tracking-widest">  <?= is_language('Minutes', 'Minutos', 'Minutos'); ?> </div>
                    </div>
                    <div>
                        <div id="seconds" class="font-bold text-3xl md:text-4xl xl:text-7xl">0</div>
                        <div class="uppercase text-sm tracking-widest">  <?= is_language('Seconds', 'Segundos', 'Segundos'); ?> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
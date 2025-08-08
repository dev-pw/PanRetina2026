<section class="l-mensagem">
    <div class="max-xl:container 2xl:container mx-auto">
        <div class="grid grid-cols-12 overflow-hidden max-xl:gap-y-6 2xl:gap-4">
            <div class="col-span-12 xl:col-span-6 l-mensagem__card bg-primary">
                <div class="l-mensagem__item">
                    <img src="<?= wp_get_attachment_image_src(69, 'full')[0]; ?>" class="md:max-w-90 md:h-full order-2 md:order-1 object-cover object-bottom" alt="">
                    <div class="p-8 text-white order-1">
                        <h6 class="text-base mb-6 text-limit"> Lorem ipsum amet, consectetur adipiscing elit. Etiam accumsan </h6>
                        <p class="font-bold text-sm">Osias Francisco de Souza </p> 
                        <p class="text-sm">BRAVS President <br> Presidente da SBRV</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6 l-mensagem__card bg-[#005EB5]">
                <div class="l-mensagem__item">
                    <img src="<?= wp_get_attachment_image_src(70, 'full')[0]; ?>" class="md:max-w-90 md:h-full order-2 md:order-1 object-cover object-bottom" alt="">
                    <div class="p-8 text-white order-1">
                        <h6 class="text-base mb-6 text-limit"> <?= get_the_excerpt(is_language_en(82, 84) ); ?> </h6>
                        <p class="font-bold text-sm"> Leandro Cabral Zacharias | Octaviano Magalhães Junior </p>
                        <p class="text-sm">50th BRAVS MEETING 2026 Presidents <br> Presidentes do 50th BRAVS Meeting 2026 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
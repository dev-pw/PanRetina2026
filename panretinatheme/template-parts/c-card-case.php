<a href="<?= the_permalink(); ?>" rel="noopener noreferrer">
    <div class="relative border-t-2 border-s-2 border-primary p-8 h-110 mx-auto overflow-hidden mt-10 shadow-xl flex flex-col justify-end inset-0 !bg-cover !bg-center before:absolute before:inset-0 before:w-full before:h-full before:bg-gradient-to-t before:from-primary before:from-15% before:to-transparent before:to-80% hover:-translate-y-3 transition-all duration-300 ease-in-out" style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>);">
    
        <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
            <!-- Borda horizontal -->
            <div class="absolute bottom-0 right-0 h-[2px] w-3/4 bg-gradient-to-l from-secondary from-15% to-transparent to-80%"></div>
            <!-- Borda vertical -->
            <div class="absolute bottom-0 right-0 w-[2px] h-3/4 bg-gradient-to-t from-secondary from-15% to-transparent to-80%"></div>
        </div>

        <div class="relative z-50 text-center w-full">
            <h3 class="text-white text-base uppercase"> <?= get_field('qtd_apartamentos'); ?> </h3>
            <p class="text-white uppercase"> <?= the_title(); ?> </p>
        </div>
    </div> 
</a>
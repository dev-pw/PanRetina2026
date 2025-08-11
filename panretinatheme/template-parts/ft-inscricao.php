<section class="py-20 bg-gray-100">
    <div class="container text-center">
        <h3 class="text-primary text-center font-black mb-8"> <?= is_language_en('Table of values', 'Tabela de valores'); ?> </h3>

        <?= get_template_part('template-parts/c-table'); ?>

        <a href="<?= the_permalink(); ?>" class="btn-secondary mt-6"> Clique aqui e inscreva-se</a>

    </div>
</section>
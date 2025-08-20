<section class="py-20 bg-gray-100">
    <div class="container text-center">
        <h3 class="text-primary text-center font-black mb-8"> <?= is_language('Registration', 'Registro', 'Inscrições'); ?> </h3>

        <?= get_template_part('template-parts/c-table'); ?>

        <a href="<?= the_permalink(); ?>" class="btn-secondary mt-6" title="<?= is_language('Click here and sign up', 'Haga clic aquí y regístrese', 'Clique aqui e inscreva-se'); ?>"> 
            <?= is_language('Click here and sign up', 'Haga clic aquí y regístrese', 'Clique aqui e inscreva-se'); ?>
        </a>

    </div>
</section>
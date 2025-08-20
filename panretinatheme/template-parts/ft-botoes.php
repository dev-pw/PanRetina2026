<?php

$buttons = array(
    [
        'nome' => is_language('Registration', 'Suscribir', 'Inscreva-se'), 
        'desc' => is_language("Don't miss out! Sign up now!", '¡No te lo pierdas! ¡Regístrate ya!', 'Não perca! Inscreva-se agora mesmo'), 
        'icon' => 'icon-exam', 
        'modal' => false, 'idModal' => '', 
        'link' => is_link_lang(60, 0, 58), 
        'link_externo' => false
    ],
    [
        'nome' => is_language('Speakers', 'Oradores', 'Palestrantes'), 
        'desc' => is_language('Check out the national and international speakers', 'Conozca a los ponentes nacionales e internacionales', 'Confira os palestrantes nacionais e internacionais'), 
        'icon' => 'icon-graduate-hat', 
        'modal' => false, 'idModal' => '', 
        'link' => is_link_lang(147, 0, 149), 
        'link_externo' => false
    ],
    [
        'nome' => is_language('Programming', 'Cronograma', 'Programação'), 
        'desc' => is_language('Check out the full schedule', 'Consulta la programación completa', 'Confira a programação completa'), 
        'icon' => 'icon-hotel', 
        'modal' => false, 'idModal' => '', 
        'link' => is_link_lang(52, 0, 50), 
        'link_externo' => false
    ],
    [
        'nome' => is_language('Venue', 'Local', 'Local do Evento'), 
        'desc' => is_language('Check out the event location and plan ahead', 'Consulte la ubicación del evento y planifique con anticipación', 'Confira o local do evento e se programe'), 
        'icon' => 'icon-location', 
        'modal' => false, 'idModal' => '', 
        'link' => is_link_lang(56, 0, 54), 
        'link_externo' => false
    ],
);

// Função helper para gerar atributos do link
function generateLinkAttributes($btn) {
    $attributes = ['class' => 'no-underline text-secondary'];
    
    if (!empty($btn['idModal'])) {
        // É um modal
        $attributes['class'] .= ' cursor-pointer';
        $attributes['data-bs-toggle'] = 'modal';
        $attributes['data-bs-target'] = '#' . $btn['idModal'];
        $attributes['href'] = '#';
    } else {
        // É um link normal
        $attributes['href'] = $btn['link'];
        $attributes['target'] = $btn['link_externo'] ? '_blank' : '_self';
    }
    
    return $attributes;
}

// Função para renderizar atributos como string
function renderAttributes($attributes) {
    $result = '';
    foreach ($attributes as $key => $value) {
        $result .= $key . '="' . htmlspecialchars($value) . '" ';
    }
    return trim($result);
}

?>

<section class="max-xl:pt-20 pb-20 lg:-mt-15 2xl:-mt-25">
    <div class="container">
        <div class="grid grid-cols-12 gap-4 gap-y-10">

            <?php foreach($buttons as $btn) :
            $linkAttributes = generateLinkAttributes($btn);
            ?>

            <div class="col-span-12 md:col-span-6 lg:col-span-3 c-card-btn">
            
                <i class="<?= $btn['icon']; ?> h2"></i>
                <p class="font-bold c-card-btn__title"> <?= $btn['nome']; ?> </p>

                <p> <?= $btn['desc']; ?> </p>

                <a <?= renderAttributes($linkAttributes); ?> title="<?= is_language('Load more', 'Más información', 'Saiba mais'); ?>">
                    <?= is_language('Load more', 'Más información', 'Saiba mais'); ?>
                </a>
            
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php

$buttons = array(
    ['nome' => is_language_en('Registration', 'Inscreva-se'), 'icon' => 'icon-exam', 'modal' => false, 'idModal' => '', 'link' => is_link_en(60, 58), 'link_externo' => false],
    ['nome' => is_language_en('Speakers', 'Palestrantes'), 'icon' => 'icon-graduate-hat', 'modal' => false, 'idModal' => '', 'link' => is_link_en(147, 149), 'link_externo' => false],
    ['nome' => is_language_en('Programming', 'Programação'), 'icon' => 'icon-hotel', 'modal' => false, 'idModal' => '', 'link' => is_link_en(52, 50), 'link_externo' => false],
    ['nome' => is_language_en('Venue', 'Local do Evento'), 'icon' => 'icon-location', 'modal' => false, 'idModal' => '', 'link' => is_link_en(56, 54), 'link_externo' => false],
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

                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <a <?= renderAttributes($linkAttributes); ?> >
                    <?= is_language_en('Load more', 'Saiba mais'); ?>
                </a>
            
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
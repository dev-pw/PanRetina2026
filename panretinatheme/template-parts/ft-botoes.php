<?php

$buttons = array(
    ['nome' => is_language_en('Registration', 'Inscrições'), 'icon' => 'icon-exam', 'modal' => false, 'idModal' => '', 'link' => is_link_en(60, 58), 'link_externo' => false],
    ['nome' => is_language_en('International Speakers', 'Convidados Internacionais'), 'icon' => 'icon-graduate-hat', 'modal' => false, 'idModal' => '', 'link' => is_link_en(147, 149), 'link_externo' => false],
    ['nome' => is_language_en('Venue', 'Local do Evento'), 'icon' => 'icon-location', 'modal' => false, 'idModal' => '', 'link' => is_link_en(56, 54), 'link_externo' => false],
    ['nome' => is_language_en('Hotel Reservation', 'Hospedagem'), 'icon' => 'icon-hotel', 'modal' => false, 'idModal' => '', 'link' => is_link_en(52, 50), 'link_externo' => false],
    
    // ['nome' => 'RETINA 2025 APP', 'nome_en' => 'RETINA 2025 APP ', 'icon' => 'icon-ui-design', 'modal' => false, 'idModal' => '', 'link' => get_the_permalink(418), 'link_en' => get_the_permalink(421), 'link_externo' => false],
    // ['nome' => 'Programação', 'nome_en' => 'Program ', 'icon' => 'icon-pesquisa', 'modal' => true, 'idModal' => 'modalProg', 'link' => '', 'link_en' => '', 'link_externo' => false],
    // ['nome' => 'Palestrantes', 'nome_en' => 'Speakers', 'icon' => 'icon-speaker', 'modal' => false, 'idModal' => '', 'link' => get_the_permalink(301), 'link_en' => get_the_permalink(299), 'link_externo' => false],
    // ['nome' => 'Certificados', 'nome_en' => 'Certificates', 'icon' => 'icon-diploma', 'modal' => false, 'idModal' => '', 'link' => 'https://atep.iweventos.com.br/evento/retina2025/certificados', 'link_en' => 'https://atep.iweventos.com.br/evento/retina2025/certificados', 'link_externo' => true],
);

?>

<section class="py-20">
    <div class="container">
        <div class="grid grid-cols-12 gap-4 gap-y-10">

            <?php foreach($buttons as $btn) :
            $target = $btn['link_externo'] == true;
            $link = $btn['link'];
            $modal = $btn['idModal'];
            $title = $btn['nome'];
            $icon = $btn['icon'];
            
            if ($modal == false) : ?>

            <a href="<?= $link; ?>" class="col-span-12 md:col-span-6 lg:col-span-3 c-card-btn no-underline" target="<?= ($target) ? '_blank': '_self'; ?>">

            <?php else : ?>

            <a class="col-span-12 md:col-span-6 lg:col-span-3 c-card-btn no-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#<?= $modal; ?>">

            <?php endif; ?>

                <i class="<?= $icon; ?> h1"></i>
                <p class="font-bold c-card-btn__title"> <?= $title; ?> </p>

            </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php

$whats = get_option('options_rs_5');
$zap = str_replace(array('(', ')', '-', ' '), '', $whats); 

?>

<section class="fixed bottom-5 right-5 z-60">
    <a href="https://wa.me/55<?= $zap; ?>" class="bg-green-400 w-13 h-13 rounded-full flex items-center justify-center transition-all duration-300 ease-in hover:bg-green-500 no-underline text-white text-3xl" target="_blank" rel="noopener noreferrer">
        <span class="icon-whatsapp align-middle"></span>
    </a>
</section>
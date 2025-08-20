<?php

$insta =  get_option('options_rs_2');
$face =  get_option('options_rs_1');
$linkedin =  get_option('options_rs_3');
?>

<?php if ( !empty($face) ) : ?>
<a href="<?= $face; ?>" target="_blank" rel="noopener noreferrer" title="Facebook">
    <i class="icon-facebook text-xl"></i>
</a>
<?php endif; ?>

<?php if ( !empty($insta) ) : ?>
<a href="<?= $insta; ?>" target="_blank" rel="noopener noreferrer" title="Instagram">
    <i class="icon-instagram text-xl"></i>
</a>
<?php endif; ?>

<?php if ( !empty($linkedin) ) : ?>
<a href="<?= $linkedin; ?>" target="_blank" rel="noopener noreferrer" title="Linkedin">
    <i class="icon-linkedin text-xl"></i>
</a>
<?php endif; ?>
<?php

/**
 * Header
 * @package WordPress
 * @subpackage panretinatheme
 *
 */

?>
<!DOCTYPE html>
<html class="no-js" lang="<?= language_attributes(); ?>">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta id='getUrl' data-url="<?= bloginfo('url'); ?>">
   <?php wp_head(); ?>

</head>

<body <?php body_class('overflow-y-hidden'); ?>>

<?php 
if(get_option('options_ativar_pop') == 'Sim') :
   get_template_part('inc/popup');
endif;?>

<div class="wrapper-site">

   <!-- Preload -->
   <div id="preload" class="bg-primary fixed z-70 w-full h-screen flex items-center justify-center">
      <img src="<?php echo get_option( 'options_logo_preload' ); ?>" class="animate-bounce" width="200" alt="">
   </div>
   <!-- Preload -->
    
   <?= get_template_part('template-parts/c-view-lang'); ?>

   <header id="js-header-site" class="py-3 absolute w-full top-0 left-0 transition-all duration-300 z-60">
      <div class="container">

         <div class="flex justify-end items-center">

            <div class="md:w-[33%] text-end">

               <div class="inline-flex gap-3 items-center">
                  
                  <div id="rs" class="flex items-center gap-2 btn-rs max-lg:hidden">
                     <?= get_template_part('template-parts/c-redes-sociais'); ?>
                  </div>

                  <div class="hidden md:inline-flex">
                     <?= get_template_part('template-parts/c-language'); ?>
                  </div>

                  <button type="button" id="toggle" class="size-12 flex gap-[6px] flex-col justify-center items-end bg-gray-100 md:bg-white hover:bg-secondary rounded-lg p-2 outline-hidden transition-all duration-300 group/toggle" aria-haspopup="dialog" aria-expanded="false" aria-controls="drawer-navigation" data-hs-overlay="#drawer-navigation">
                     <span class="w-[50%] h-[3px] bg-primary transition-all duration-300 group-hover/toggle:bg-white group-hover/toggle:w-full"></span>
                     <span class="w-[70%] h-[3px] bg-primary transition-all duration-300 group-hover/toggle:bg-white group-hover/toggle:w-full"></span>
                     <span class="w-[50%] h-[3px] bg-primary me-auto transition-all duration-300 group-hover/toggle:bg-white group-hover/toggle:w-full"></span>
                  </button>

               </div>

            </div>


         </div>

      </div>
   </header>

   <!-- DRAWER OFFCANVAS -->
   <div id="drawer-navigation" class="hs-overlay hs-overlay-open:translate-x-0 hidden fixed top-0 start-0 transition-all duration-300 h-full w-full z-60 bg-black/50" role="dialog" tabindex="-1">
      <div class="translate-x-full hs-overlay-open:translate-x-0 p-4 fixed top-0 end-0 transition-all duration-300 transform h-full w-full sm:w-100 bg-gray-100" aria-labelledby="drawer-navigation-label">

         <div class="flex justify-between items-center">
            <img src="<?= get_option('options_menubar'); ?>" alt="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>" class="max-w-full w-50 md:w-55">
            <button type="button" class="text-primary bg-transparent hover:bg-primary hover:text-white rounded-lg w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center transition-all" aria-label="Close" data-hs-overlay="#drawer-navigation">
               <i class="icon-clear h5"></i>
               <span class="sr-only">Close menu</span>
            </button>
         </div>

         <div class="flex justify-center flex-wrap gap-4 mt-5">

            <div class="c-menu" id="js-nav-menu">
               <?= get_template_part('template-parts/c-menu'); ?>
            </div>

            <div class="md:hidden">
               <?= get_template_part('template-parts/c-language'); ?>
            </div>
               
            <div class="flex items-center gap-2 btn-rs-dark lg:hidden">
               <?= get_template_part('template-parts/c-redes-sociais'); ?>
            </div>
               
         </div>
         
      </div>
   </div>
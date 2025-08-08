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
   <div id="preload" class="bg-white fixed z-70 w-full h-screen flex items-center justify-center">
      <img src="<?php echo get_option( 'options_logo_preload' ); ?>" class="animate-bounce" width="200" alt="">
   </div>
   <!-- Preload -->

   <header id="js-header-site" class="py-3 absolute w-full top-0 left-0 bg-white transition-all duration-300 z-60">
      <div class="container">

         <div class="flex justify-between items-center">

            <div class="hidden md:block md:w-[33%]">
               <div class="flex gap-4">
                  <div class="flex items-center gap-2 btn-rs-dark">
                     <?= get_template_part('template-parts/c-redes-sociais'); ?>
                  </div>
                  <a href="<?= is_link_en(60, 58); ?>" class="btn btn-gradient px-12 hidden lg:block"> <?= is_language_en('Registration', 'Inscrições'); ?> </a>
               </div>
            </div>

            <div id="js-header-brand" class="md:w-[33%]">
               <a href="<?= bloginfo('url'); ?>" title="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>">
                  <img src="<?= get_option('options_logo_header'); ?>" alt="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>" class="max-w-full w-55 md:w-67 mx-auto">
               </a>
            </div>

            <div class="md:w-[33%] text-end">

               <div class="inline-flex gap-3 items-center">
                  
                  <div class="hidden md:inline-flex">
                     <?= get_template_part('template-parts/c-language'); ?>
                  </div>

                  <i class="text-[33px] icon-circle-user-regular text-primary ms-2"></i>

                  <button type="button" class="w-10 h-10 flex gap-[6px] outline-hidden flex-col justify-center items-end group/toggle" aria-haspopup="dialog" aria-expanded="false" aria-controls="drawer-navigation" data-hs-overlay="#drawer-navigation">
                     <span class="w-[50%] h-1 bg-primary rounded-xl transition-all duration-200 group-hover/toggle:w-full"></span>
                     <span class="w-[70%] h-1 bg-primary rounded-xl transition-all duration-200 group-hover/toggle:w-full"></span>
                     <span class="w-[35%] h-1 bg-primary rounded-xl transition-all duration-200 group-hover/toggle:w-full"></span>
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
            <img src="<?= get_option('options_logo_header'); ?>" alt="<?= bloginfo('name') . ' - ' . bloginfo('description'); ?>" class="max-w-full w-50 md:w-55">
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
               
            <div class="flex items-center gap-2 btn-rs-dark md:hidden">
               <?= get_template_part('template-parts/c-redes-sociais'); ?>
            </div>
               
         </div>
         
      </div>
   </div>

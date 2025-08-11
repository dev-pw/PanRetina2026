jQuery(document).ready(function ($) {

   let url = window.origin;

   /*=================================================
   CONFIGURACAO HEADER STICKY
   =================================================*/
   $(window).scroll(function () {
      if ($(window).scrollTop() > 150) {
         $('#js-header-site').addClass('fixed animation-translate shadow-md py-1 bg-white');
         $('#js-header-site').removeClass('py-3');
         $('#js-header-site #toggle').removeClass('md:bg-white');
         $('#js-header-site #rs').removeClass('btn-rs');
         $('#js-header-site #rs').addClass('btn-rs-dark');
         $('#js-header-brand img').addClass('!w-[200px]');
      }
      else {
         $('#js-header-site').removeClass('fixed animation-translate shadow-md py-1 bg-white');
         $('#js-header-site').addClass('py-3');
         $('#js-header-site #rs').addClass('btn-rs');
         $('#js-header-site #rs').removeClass('btn-rs-dark');
         $('#js-header-site #toggle').addClass('md:bg-white');
         $('#js-header-brand img').removeClass('!w-[200px]');
      }
   });

   /*=================================================
   CONFIGURACAO NAV MENU
   =================================================*/
   // $("#js-nav-menu .menu-item-has-children > a").click(function (e) {
   //    $("#js-nav-menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
   //    e.stopPropagation();
   // });

   /*=================================================
    CONFIGURAÇÃO NAV MENU OFFCANVAS
   =================================================*/
   document.querySelectorAll('#js-nav-menu .menu-item-has-children > a').forEach(item => {
      item.addEventListener('click', event => {
         event.preventDefault(); // Previne o redirecionamento do link

         const parent = item.parentNode;

         // Fecha todos os submenus irmãos (caso algum esteja aberto)
         parent.parentNode.querySelectorAll('.menu-item-has-children').forEach(sibling => {
               if (sibling !== parent) {
                  sibling.classList.remove('active');
               }
         });

         // Alterna a visibilidade do submenu específico clicado
         parent.classList.toggle('active');
      });
   });

   /*=================================================
   Preload Do Site
   ===================================================*/

   if(document.readyState === 'ready' || document.readyState === 'complete') {

      $('#preload').css('opacity', '0');
      $('#preload').css('visibility', 'hidden');
      $('body').removeClass('overflow-y-hidden');

      setTimeout(()=>{
          $('#preload').remove();
      }, 1000);
      clearTimeout;

    } else {
      document.onreadystatechange = function () {
        if (document.readyState == "complete") {

          $('#preload').css('opacity', '0');
          $('#preload').css('visibility', 'hidden');
          $('body').removeClass('overflow-y-hidden');

          setTimeout(()=>{
              $('#preload').remove();
          }, 1000);
          clearTimeout;

        }
      }
    }

    /*=================================================
    MUDAR BANDEIRAS DE IDIOMA
    =================================================*/
    $(document).ready( () => {

      $('.target a').attr('target', '_blank');

      if($('.lang-item-pt a').attr('lang')) {
         $('.lang-item-pt a img').attr('src', url + '/panrertina2026/wp-content/uploads/brasil.png');
      }

      if($('.lang-item-en a').attr('lang')) {
         $('.lang-item-en a img').attr('src', url + '/panrertina2026/wp-content/uploads/estados-unidos.png');
      }

      if($('.lang-item-es a').attr('lang')) {
         $('.lang-item-es a img').attr('src', url + '/panrertina2026/wp-content/uploads/espanha.png');
      }

      if($('.lang-item')){
         $('.lang-item a img').attr('width', '40');
         $('.lang-item a img').attr('height', '40');
         $('.lang-item a img').css('height', '');
         $('.lang-item a img').css('width', '');
      }
   })


   /*================================================
    Contador do evento 
    =================================================*/

    if($("#days").length != 0) {

      // countdown
      (function () {
          const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;
    
          let today = new Date(),
              dd = String(today.getDate()).padStart(2, "0"),
              mm = String(today.getMonth() + 1).padStart(2, "0"),
              yyyy = today.getFullYear(),
              nextYear = 2026,
              monthDay = "11/04/",
              evento = monthDay + yyyy;
    
          today = mm + "/" + dd + "/" + yyyy;
          if (today > evento) {
              evento = monthDay + nextYear;
          }
    
          const countDown = new Date(evento).getTime(),
              x = setInterval(function () {
    
                  const now = new Date().getTime(),
                      distance = countDown - now;
    
    
                      document.getElementById("days").innerText = Math.floor(distance / (day)),
                      document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                      document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                      document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
              }, 0)
      }());
    }
   
   /*=================================================
   Fechar Offcanvas ao clicar fora
   =================================================*/

   $('#drawer-navigation').on('click', function(event) {
      if (event.target === event.currentTarget) {
         HSOverlay.close(document.querySelector('#drawer-navigation'));
      }
   });

   $('#drawer-navigation > div').on('click', function(event) {
      event.stopPropagation();
   });
   
   /*=================================================
   Inserindo Lighbox na Galeria do WordPress
   =================================================*/

   $('.entry-content-post .wp-block-image a').attr('data-fancybox', '');
   $('.entry-content-post .wp-block-gallery .wp-block-image a').attr('data-fancybox', 'gallery');
   $('.entry-content-post').attr('id', 'thumbnails-gallery');
   $('.entry-content-post').data('fancybox');

   Fancybox.bind('[data-fancybox]', {
      // Your custom options for a specific gallery
   });

   Fancybox.bind('[data-fancybox=gallery]', {
      // Your custom options for a specific gallery
   });
  

});

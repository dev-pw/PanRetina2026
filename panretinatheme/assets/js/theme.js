jQuery(document).ready(function ($) {

   let host = window.origin;
   console.log(host);
   
   let path = '/panretina2026'; 
   let url = (host == 'http://localhost') ? host : host+path;

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
         $('.l-lang').addClass('!border-primary');
         $('.l-lang p').addClass('!text-primary');
      }
      else {
         $('#js-header-site').removeClass('fixed animation-translate shadow-md py-1 bg-white');
         $('#js-header-site').addClass('py-3');
         $('#js-header-site #rs').addClass('btn-rs');
         $('#js-header-site #rs').removeClass('btn-rs-dark');
         $('#js-header-site #toggle').addClass('md:bg-white');
         $('#js-header-brand img').removeClass('!w-[200px]');
         $('.l-lang').removeClass('!border-primary');
         $('.l-lang p').removeClass('!text-primary');
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

      $('.lang-item-pt a img').attr('src', url + '/wp-content/uploads/brazil.png');
      $('.lang-item-en a img').attr('src', url + '/wp-content/uploads/usa.png');
      $('.lang-item-es a img').attr('src', url + '/wp-content/uploads/spain.png');
      $('.lang-item a img').addClass('rounded-xl');
      $('.lang-item a img').attr('width', '230');
      $('.lang-item a img').attr('height', '230');
      $('.lang-item a img').css('height', '');
      $('.lang-item a img').css('width', '');
      
      $('.image-pt img').attr('src', url + '/wp-content/uploads/brazil.png');
      $('.image-en img').attr('src', url + '/wp-content/uploads/usa.png');
      $('.image-es img').attr('src', url + '/wp-content/uploads/spain.png');
      
      if($('.lang-image')){
         $('.lang-image img').attr('width', '33');
         $('.lang-image img').css('height', '');
         $('.lang-image img').css('width', '');
      }
      
   })
   
   /*=================================================
   OVERLAY AO MUDAR IDIOMA
   =================================================*/
   $('.lang-item-pt a').attr('data-lang', 'pt');
   $('.lang-item-en a').attr('data-lang', 'en');
   $('.lang-item-es a').attr('data-lang', 'es');

   var KEY = 'langChosen';
   var $overlay = $('#js-changeLang');
   var $toggle  = $('#js-toggleLang');

   function openOverlay() {
      $overlay.removeClass('invisible opacity-0').addClass('!opacity-100');
      $('html').addClass('overflow-hidden');
   }

   function closeOverlay() {
      $overlay.removeClass('!opacity-100').addClass('opacity-0');
      setTimeout(function() {
         $overlay.addClass('invisible');
      }, 200);
      $('html').removeClass('overflow-hidden');
   }

    // Detecta idioma e se é home
    var currentLang = window.__CURRENT_LANG__ || '';
    var isFront = window.__IS_FRONT__ || false;
    var chosen = localStorage.getItem(KEY);

    // Primeira visita: abre overlay (opcionalmente só na home)
    if (!chosen) {
        if (currentLang) {
            localStorage.setItem(KEY, currentLang);
        } else {
            if (isFront) {
                openOverlay();
            }
        }
    }

    // Clique no botão do topo
    $toggle.on('click', function(e) {
        e.preventDefault();
        openOverlay();
    });

    // Clique nas opções de idioma
    $('.lang-item a').on('click', function(e) {
        var code = $(this).data('lang');
        localStorage.setItem(KEY, code);
    });

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

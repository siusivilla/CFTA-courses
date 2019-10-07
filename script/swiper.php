<script src="<?php echo BASE_URL?>assets/js/swiper.min.js"></script>
<script>
// Swiper - impostazioni 
    var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'bullets',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
      },
      // when window width is >= 780px
      780: {
        slidesPerView: 3,
      }
    },
    loop: true,
    autoplay: {
      delay: 4000,
    }
  });
  </script>
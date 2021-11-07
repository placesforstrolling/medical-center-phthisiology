window.addEventListener('load', () => {

    const carouselItem = $('header .carousel-item'),
          underMenuHei = $('header .under-menu-in').outerHeight(),
          headerHeight = $('header').outerHeight(),
          heightForCarousel = headerHeight - underMenuHei;
    
    carouselItem.height(heightForCarousel);
  });
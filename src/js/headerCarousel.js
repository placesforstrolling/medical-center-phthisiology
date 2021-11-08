window.addEventListener('load', () => {

    const carouselItem = $('header .carousel-item'),
          underMenuHei = $('header .under-menu-in').outerHeight(),
          headerImage = $('header .header-background'),
          headerHeight = $('header').outerHeight(),
          heightForCarousel = headerHeight - underMenuHei;
    
    carouselItem.height(heightForCarousel);
    headerImage.height(heightForCarousel);
  });
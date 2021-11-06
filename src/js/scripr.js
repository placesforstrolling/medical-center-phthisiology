document.addEventListener('DOMContentLoaded', () => {
    const headerHeight = $('header').outerHeight();
      const headerBg = $('.header-background');
      const underMenuHei = $('header .under-menu').outerHeight();
      const scrolled = window.pageYOffset || document.documentElement.scrollTop;

      headerBg.height(headerHeight - underMenuHei);
   
     $('.carousel-item').height(headerHeight - underMenuHei);
    if (scrolled >=  underMenuHei) {
      $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) +'px)').addClass('scrolled')
    }
    else {
      $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled')
    }
         
        document.addEventListener('scroll', () => {
          const underMenuHei = $('header .under-menu').outerHeight();
          const scrolled = window.pageYOffset || document.documentElement.scrollTop;
          if (scrolled >=  underMenuHei) {
            $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) +'px)').addClass('scrolled')
          }
          else {
            $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled')
          }
        })

    
    // new Glide('.glide').mount();
    //   new Glide('.header-glide', {
    //   type: 'carousel',
    //   startAt: 0,
    //   perView: 1
    // }).mount();
    // new Glide('.header-glide', {
    // type: 'carousel',
    // startAt: 1,
    // perView: 1
    // }).mount();
    new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 3
    }).mount();
  });
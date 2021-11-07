document.addEventListener('DOMContentLoaded', () => {

  const underMenuHei = $('header .under-menu-in').outerHeight(),
        scrolled = window.pageYOffset || document.documentElement.scrollTop;

  document.addEventListener('scroll', () => {
    const underMenuHei = $('header .under-menu').outerHeight();
    const scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled >= underMenuHei) {
      $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) + 'px)').addClass('scrolled')
    } else {
      $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled')
    }
  })

  if (scrolled >= underMenuHei) {
    $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) + 'px)').addClass('scrolled')
  } else {
    $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled')
  }


  new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 3
  }).mount();
});
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

  try{
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      perView: 3
    }).mount();
    }catch(e){
    
    functionToHandleError(e);
    }
  
  $('.menu-item').addClass('nav-item');
  $('.sub-menu li').addClass('sub-menu-link').removeClass('nav-item');
  document.querySelectorAll('.nav-item').forEach((item) => {
    if ($(item).children('.sub-menu').length > 0) {
      $(item).children('.nav-link').addClass('dropped')
    }
  });
  document.querySelectorAll('.sub-menu-link').forEach((item) => {
    if ($(item).children('.sub-menu').length > 0) {
      $(item).addClass('sub-sub')
    }
  });
});
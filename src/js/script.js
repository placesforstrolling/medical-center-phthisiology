document.addEventListener('DOMContentLoaded', () => {

  const underMenuHei = $('header .under-menu-in').outerHeight(),
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
  normalizeMenu();
  document.addEventListener('scroll', () => {
    const underMenuHei = $('header .under-menu').outerHeight();
    const scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled >= underMenuHei) {
      $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) + 'px)').addClass('scrolled');
    } else {
      $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled');
    }
    mobileMenu()
  })

  if (scrolled >= underMenuHei) {
    $('.navbar.bg-light').css('transform', 'translateY(-' + (underMenuHei) + 'px)').addClass('scrolled')
  } else {
    $('.navbar.bg-light').css('transform', 'translateY(0)').removeClass('scrolled')
  }
  mobileMenu()
  try {
    let perView = 3;
    if (window.screen.width < 767) {
      perView = 2;
    }
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      perView: perView
    }).mount();
  } catch (e) {

    console.log('Error');
  }

  function mobileMenu() {
    if (window.screen.width < 1200) {
      $('.navbar.bg-light').addClass('scrolled');
      
    }
    const links = document.querySelectorAll('.nav-item .dropped');
      links.forEach(item => {
        item.addEventListener('click', (e) => {
          e.preventDefault();
        });
      });
  }

  function normalizeMenu() {
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
  }


});
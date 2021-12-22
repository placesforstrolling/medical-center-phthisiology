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
        $(item).children('.nav-link').addClass('dropped');
      }
    });
    document.querySelectorAll('.sub-menu-link').forEach((item) => {
      if ($(item).children('.sub-menu').length > 0) {
        $(item).addClass('sub-sub');
        
      }
    });
    document.querySelectorAll('.sub-sub > a').forEach(item => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
      });
    });
    
  }


  const eyeBtn = document.querySelector('.eyeBtn'),
        opportunitie = document.querySelector('.opportunities'),
        eyeReverse = opportunitie.querySelector('.eye-reverse'),
        eyeGray = opportunitie.querySelector('.eye-gray'),
        eyeNormal = opportunitie.querySelector('.eye-normal'),
        eyeMinus = opportunitie.querySelector('.eye-minus'),
        eyePlus = opportunitie.querySelector('.eye-plus'),
        elements = document.getElementsByTagName("body")[0],
        closer = opportunitie.querySelector('.closer');



        eye(eyeReverse, 'eye-reverse');
        eye(eyeGray, 'eye-gray');
        eye(eyeNormal, '');

        eyeMinus.addEventListener('click', () => {
          changeFont(elements, -1);
        });
        eyePlus.addEventListener('click', () => {
          changeFont(elements, 1);
        });

  closer.addEventListener('click', () => {
    opportunitie.classList.remove('active');
  });
  eyeBtn.addEventListener('click', () => {
    opportunitie.classList.toggle('active');
  });
  function eye (eye, str) {
    eye.addEventListener('click', () => {
      document.body.className = str;
      console.log(str)
    });
  }
  function changeFont(element, num){
    let fontSize = Number(window.getComputedStyle(element).getPropertyValue('font-size').match(/\d+/)[0]) + (num);
    let oldStyle = element.getAttribute('style');
    if (oldStyle == null) {
      oldStyle = '';
    }
    element.setAttribute("style", oldStyle + "font-size:" + fontSize + "px;");
    for(var i=0; i < element.children.length; i++){
        changeFont(element.children[i], num);
    }
}
// navLink = $('.nav-link');
// navLink.addEventListener('touchend', () => {
//   if($(this).is(':hover')) { 
    
//     $(this).off('hover');
//   } else {
//     $(this).trigger('hover');
//   }
// })

//service calculator

const calcItem = document.querySelectorAll('.calcItem'),
      calcTotalDiv = document.querySelector('.totalCalc'),
      calcRadio = document.querySelectorAll('.resident'),
      calcCatBtns = document.querySelectorAll('.nav-pills .nav-link');
let calcTotal = 0,
    dataPrice = 'data-price';

  $(calcCatBtns[0]).trigger('click');
    calcRadio.forEach(item => {
      item.addEventListener('click', () => {
           dataPrice = item.value;
           calcWrite(0);
      });
    });

      calcItem.forEach(item => {
        item.addEventListener('click', (e) => {
          let target = e.target,
          calcCheckbox = item.querySelector('.select');
          
          if (target.tagName == 'TD') {
            calcCheckbox.click();
          } else if (target.tagName == 'INPUT') {
            if (target.checked) {
              calcTotal += Number.parseInt(target.parentElement.parentElement.getAttribute(dataPrice).replace(/[^\d]/g, ''));
            } else {
              calcTotal -= Number.parseInt(target.parentElement.parentElement.getAttribute(dataPrice).replace(/[^\d]/g, ''));
            }
            calcWrite(calcTotal);
          }
          
        });
      });

    function calcWrite(num) {
      var n = num.toString();
      n = n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
      calcTotalDiv.innerHTML = n;
    }
});
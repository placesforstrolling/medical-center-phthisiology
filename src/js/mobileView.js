
document.addEventListener('DOMContentLoaded', () => {
    const mobile = document.querySelector('#mobileView');

    mobile.addEventListener('click', () => { 
    var w1 = window.open(location.href,'wind1', "width=400,height=600");
    w1.location.href=location.href;


    });

});
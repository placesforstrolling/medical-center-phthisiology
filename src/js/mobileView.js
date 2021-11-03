
document.addEventListener('DOMContentLoaded', () => {
    const mobile = document.querySelector('#mobileView');

    mobile.addEventListener('click', () => {
        window.open("about:blank", "hello", "width=400,height=600");
    });

});
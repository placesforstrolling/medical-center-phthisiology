window.addEventListener("load",()=>{const e=$("header .carousel-item"),t=$("header .under-menu-in").outerHeight(),o=$("header").outerHeight(),n=o-t;e.height(n)}),document.addEventListener("DOMContentLoaded",()=>{const o={ru:{h1:"Привет!",p:"Привет как дела этот сайт стоит 17 лмов"},uz:{h1:"Salom!",p:"Salom 17 million"},en:{h1:"Hello!",p:"Hello 17 million"}};if(void 0!==window.location.hash||"#uz"===window.location.hash||"#ru"===window.location.hash){const n=window.location.hash.slice(1),t=document.querySelectorAll(".lang");t.forEach(e=>{var t=e.getAttribute("data-lang");e.textContent=o[n][t]})}const e=document.querySelectorAll("[data-reload]");e.forEach(e=>{e.addEventListener("click",()=>{setTimeout(()=>{location.reload(!0)},100)})})}),document.addEventListener("DOMContentLoaded",()=>{const e=document.querySelector("#mobileView");e.addEventListener("click",()=>{window.open(location.href,"wind1","width=400,height=600").location.href=location.href})}),document.addEventListener("DOMContentLoaded",()=>{var e=$("header .under-menu-in").outerHeight(),t=window.pageYOffset||document.documentElement.scrollTop;document.addEventListener("scroll",()=>{var e=$("header .under-menu").outerHeight();e<=(window.pageYOffset||document.documentElement.scrollTop)?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled")}),e<=t?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled"),new Glide(".glide",{type:"carousel",startAt:0,perView:3}).mount()});
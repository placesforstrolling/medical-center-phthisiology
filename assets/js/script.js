window.addEventListener("load",()=>{const e=$("header .carousel-item"),t=$("header .under-menu-in").outerHeight(),n=$("header .header-background"),o=$("header").outerHeight(),a=o-t;e.height(a),n.height(a)}),document.addEventListener("DOMContentLoaded",()=>{const n={ru:{h1:"Привет!",p:"Привет как дела этот сайт стоит 17 лмов"},uz:{h1:"Salom!",p:"Salom 17 million"},en:{h1:"Hello!",p:"Hello 17 million"}};if(void 0!==window.location.hash||"#uz"===window.location.hash||"#ru"===window.location.hash){const o=window.location.hash.slice(1),t=document.querySelectorAll(".lang");t.forEach(e=>{var t=e.getAttribute("data-lang");e.textContent=n[o][t]})}const e=document.querySelectorAll("[data-reload]");e.forEach(e=>{e.addEventListener("click",()=>{setTimeout(()=>{location.reload(!0)},100)})})}),document.addEventListener("DOMContentLoaded",()=>{const e=document.querySelector("#mobileView");e.addEventListener("click",()=>{window.open(location.href,"wind1","width=400,height=600").location.href=location.href})}),document.addEventListener("DOMContentLoaded",()=>{var e=$("header .under-menu-in").outerHeight(),t=window.pageYOffset||document.documentElement.scrollTop;document.addEventListener("scroll",()=>{var e=$("header .under-menu").outerHeight();e<=(window.pageYOffset||document.documentElement.scrollTop)?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled")}),e<=t?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled");try{let e=3;window.screen.width<767&&(e=2),new Glide(".glide",{type:"carousel",startAt:0,perView:e}).mount()}catch(e){console.log("Error")}$(".menu-item").addClass("nav-item"),$(".sub-menu li").addClass("sub-menu-link").removeClass("nav-item"),document.querySelectorAll(".nav-item").forEach(e=>{0<$(e).children(".sub-menu").length&&$(e).children(".nav-link").addClass("dropped")}),document.querySelectorAll(".sub-menu-link").forEach(e=>{0<$(e).children(".sub-menu").length&&$(e).addClass("sub-sub")})});
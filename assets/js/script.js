window.addEventListener("load",()=>{const e=$("header .carousel-item"),t=$("header .under-menu-in").outerHeight(),n=$("header .header-background"),o=$("header").outerHeight(),r=o-t;e.height(r),n.height(r)}),document.addEventListener("DOMContentLoaded",()=>{const n={ru:{h1:"Привет!",p:"Привет как дела этот сайт стоит 17 лмов"},uz:{h1:"Salom!",p:"Salom 17 million"},en:{h1:"Hello!",p:"Hello 17 million"}};if(void 0!==window.location.hash||"#uz"===window.location.hash||"#ru"===window.location.hash){const o=window.location.hash.slice(1),t=document.querySelectorAll(".lang");t.forEach(e=>{var t=e.getAttribute("data-lang");e.textContent=n[o][t]})}const e=document.querySelectorAll("[data-reload]");e.forEach(e=>{e.addEventListener("click",()=>{setTimeout(()=>{location.reload(!0)},100)})})}),document.addEventListener("DOMContentLoaded",()=>{const e=document.querySelector("#mobileView");e.addEventListener("click",()=>{window.open(location.href,"wind1","width=400,height=600").location.href=location.href})}),document.addEventListener("DOMContentLoaded",()=>{var e=$("header .under-menu-in").outerHeight(),t=window.pageYOffset||document.documentElement.scrollTop;$(".menu-item").addClass("nav-item"),$(".sub-menu li").addClass("sub-menu-link").removeClass("nav-item"),document.querySelectorAll(".nav-item").forEach(e=>{0<$(e).children(".sub-menu").length&&$(e).children(".nav-link").addClass("dropped")}),document.querySelectorAll(".sub-menu-link").forEach(e=>{0<$(e).children(".sub-menu").length&&$(e).addClass("sub-sub")}),document.querySelectorAll(".sub-sub > a").forEach(e=>{e.addEventListener("click",e=>{e.preventDefault()})}),document.addEventListener("scroll",()=>{var e=$("header .under-menu").outerHeight();e<=(window.pageYOffset||document.documentElement.scrollTop)?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled"),n()}),e<=t?$(".navbar.bg-light").css("transform","translateY(-"+e+"px)").addClass("scrolled"):$(".navbar.bg-light").css("transform","translateY(0)").removeClass("scrolled"),n();try{let e=3;window.screen.width<767&&(e=2),new Glide(".glide",{type:"carousel",startAt:0,perView:e}).mount()}catch(e){console.log("Error")}function n(){window.screen.width<1200&&$(".navbar.bg-light").addClass("scrolled");const e=document.querySelectorAll(".nav-item .dropped");e.forEach(e=>{e.addEventListener("click",e=>{e.preventDefault()})})}const o=document.querySelector(".eyeBtn"),r=document.querySelector(".opportunities"),l=r.querySelector(".eye-reverse"),a=r.querySelector(".eye-gray"),d=r.querySelector(".eye-normal"),c=r.querySelector(".eye-minus"),s=r.querySelector(".eye-plus"),i=document.getElementsByTagName("body")[0],u=r.querySelector(".closer");function m(e,t){e.addEventListener("click",()=>{document.body.className=t,console.log(t)})}function h(e,t){var n=Number(window.getComputedStyle(e).getPropertyValue("font-size").match(/\d+/)[0])+t;let o=e.getAttribute("style");null==o&&(o=""),e.setAttribute("style",o+"font-size:"+n+"px;");for(var r=0;r<e.children.length;r++)h(e.children[r],t)}m(l,"eye-reverse"),m(a,"eye-gray"),m(d,""),c.addEventListener("click",()=>{h(i,-1)}),s.addEventListener("click",()=>{h(i,1)}),u.addEventListener("click",()=>{r.classList.remove("active")}),o.addEventListener("click",()=>{r.classList.toggle("active")})});
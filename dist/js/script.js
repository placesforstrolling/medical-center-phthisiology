document.addEventListener("DOMContentLoaded",()=>{const t={ru:{h1:"Привет!",p:"Привет как дела этот сайт стоит 17 лмов"},uz:{h1:"Salom!",p:"Salom 17 million"},en:{h1:"Hello!",p:"Hello 17 million"}};if(void 0!==window.location.hash||"#uz"===window.location.hash||"#ru"===window.location.hash){const n=window.location.hash.slice(1),e=document.querySelectorAll(".lang");e.forEach(o=>{var e=o.getAttribute("data-lang");o.textContent=t[n][e]})}const o=document.querySelectorAll("[data-reload]");o.forEach(o=>{o.addEventListener("click",()=>{setTimeout(()=>{location.reload(!0)},100)})})}),document.addEventListener("DOMContentLoaded",()=>{const o=document.querySelector("#mobileView");o.addEventListener("click",()=>{window.open("about:blank","hello","width=400,height=600")})});
function alerta(){Swal.fire({title:"¿Tienes algun problema?",text:"\nSi necesitas soporte contacta a admin@correo.com",icon:"question"})}function darkMode(){const e=window.matchMedia("(prefers-color-scheme: dark)");e.matches?document.body.classList.add("dark-mode"):document.body.classList.remove("dark-mode"),e.addEventListener("change",(function(){e.matches?document.body.classList.add("dark-mode"):document.body.classList.remove("dark-mode")}));document.querySelector(".dark-mode-boton").addEventListener("click",(function(){document.body.classList.toggle("dark-mode")}))}window.addEventListener("DOMContentLoaded",(function(){darkMode()}));
window.addEventListener('DOMContentLoaded', function(){
  darkMode();
});



function alerta(){
  Swal.fire({
        title: '¿Tienes algun problema?',
        text: "\nSi necesitas soporte contacta a admin@correo.com",
        icon: 'question'
      })
}

function darkMode(){
  const preferencia = window.matchMedia('(prefers-color-scheme: dark)')

  if(preferencia.matches){
      document.body.classList.add('dark-mode')
  }else{
      document.body.classList.remove('dark-mode')
  }

  preferencia.addEventListener('change', function(){
      if(preferencia.matches){
          document.body.classList.add('dark-mode')
      }else{
          document.body.classList.remove('dark-mode')
      }
  })
  
    const botonDarkMode = document.querySelector('.dark-mode-boton')
  
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode')

  })
}
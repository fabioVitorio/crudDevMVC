(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {

      if (!form.checkValidity()) { //validação bootstrap
        event.preventDefault()
        event.stopPropagation()
        form.classList.add('was-validated')
        return;
      }

      if (validaSenha()) { 
        event.preventDefault()
        event.stopPropagation()

        if(validaSenha() === 'conf_senha'){
          toastErrorSenha();
        }else if (validaSenha() === 'length'){
          toastErrorSenhaLength();
        }
        
        return;
      }
      
    }, false)
  })
})()

// --

function toastError(){
  var myToast = new bootstrap.Toast(document.getElementById('toastError'));
  myToast.show();
}

function toastSuccess(){
  var myToast = new bootstrap.Toast(document.getElementById('toastSuccess'));
  myToast.show();
}

function toastErrorSenha(){
  var myToast = new bootstrap.Toast(document.getElementById('toastErrorSenha'));
  myToast.show();
}

function toastErrorSenhaLength(){
  var myToast = new bootstrap.Toast(document.getElementById('toastErrorSenhaLength'));
  myToast.show();
}


function validaSenha() {
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('conf_senh').value;

  if (password !== confirmPassword) {
    return 'conf_senha'
  }else if(password.length < 8){
    return 'length'
  }

  return false;
}
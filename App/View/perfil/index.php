<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
  <title>Atualizar Aluno</title>
</head>

<body>
  <!-- nav -->
  <nav class="navbar bg-dark border-bottom border-body p-1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://www.kaleida.co.uk/app/uploads/2015/09/education-icon.png" alt="Logo" width="55" height="35" class="d-inline-block align-text-top">
      </a>
      <h4 class="text-center text-light m-0">MEU PERFIL</h4>
      <div class="d-flex gap-3 m-0 justify-content-center align-items-center">
        <form method="POST" action="http://localhost/crudDev/User/listarAluno">
          <button class="btn btn-outline-danger btn-sm" type="submit">Cancelar</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- toast error senha -->
  <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastErrorSenhaLength">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
        </svg>
        Senha deve conter no mínimo 8 caracteres
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

  <!-- toast error senha lenght -->
  <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastErrorSenha">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
        </svg>
        As senhas não conferem
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

  <!-- toast error email -->
  {% if error_cad == 'error' %}
  <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastError">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
        </svg>
        Email já cadastrado
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      toastError();
    });
  </script>
  {% endif %}

  <!-- toast error email -->
  {% if error_cad == 'error_cpf' %}
  <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastError">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
        </svg>
        CPF já cadastrado
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      toastError();
    });
  </script>
  {% endif %}

  <!-- toast success cadastro -->
  {% if error_cad == 'success' %}
  <div class="toast align-items-center text-white bg-success border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccess">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        Atualizado com sucesso
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      toastSuccess();
    });
  </script>
  {% endif %}

  <!-- main -->
  <div style="padding: 0px 0 20px 0; max-width: 60%; margin: 0 auto">
    <form method="POST" action="http://localhost/crudDev/User/editarUsuario" class="row justify-content-center g-2 m-auto needs-validation" style="padding: 30px; " novalidate>
      <div>
        <label class="form-label">Nome</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
          </span>
          <input type="text" class="form-control" id="name" name="nome" value="{{ usuario.nome }}" aria-describedby="inputGroupPrepend" placeholder="Digite o nome" required>
        </div>
      </div>

      <div>
        <label class="form-label">E-mail</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
              <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
              <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
            </svg>
          </span>
          <input type="email" class="form-control" name="email" value="{{ usuario.email }}" aria-describedby="inputGroupPrepend" placeholder="Digite o e-mail" required>
        </div>
      </div>

      <div class="">
        <label class="form-label">CPF</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" />
            </svg>
          </span>
          <input type="text" class="form-control" id="inputCpf" name="cpf" value="{{ usuario.cpf }}" aria-describedby="inputGroupPrepend" placeholder="Digite o CPF" required>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              new Cleave('#inputCpf', {
                delimiters: ['.', '.', '-'],
                blocks: [3, 3, 3, 2],
                numericOnly: true
              });
            });
          </script>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Senha</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <strong>***</strong>
          </span>
          <input type="password" class="form-control" id="password" name="senha" aria-describedby="inputGroupPrepend" placeholder="Forneça uma nova senha" required>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Conf. Senha</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <strong>***</strong>
          </span>
          <input type="password" class="form-control" id="conf_senh" name="conf_senha" aria-describedby="inputGroupPrepend" placeholder="Confirme a senha" required>
        </div>
      </div>

      <button class="btn btn-success mt-5" type="submit" id="liveToastBtn" onclick="validaSenha()">Atualizar</button>

    </form>
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="http://localhost/crudDev/App/View/cadastrar/script.js"></script>
</body>

</html>
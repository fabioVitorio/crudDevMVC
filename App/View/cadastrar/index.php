<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
  <link rel="stylesheet" href="http://localhost/crudDev/App/View/cadastrar/style.css">
  <title>App</title>
</head>

<body>

  <!-- nav -->
  <nav class="navbar bg-dark fixed-top">
    
    <div class="container-fluid">
      <img src="https://www.kaleida.co.uk/app/uploads/2015/09/education-icon.png" alt="Logo" width="55" height="35" class="d-inline-block align-text-top">
      <h4 class="text-center text-light m-0">CADASTRO DE ALUNOS</h4>
      <button class="navbar-toggler bg-light d-flex justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="border-radius: 2px !important;">
        <span class="navbar-toggler-icon" style="font-size: 0.75rem;"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CONTROLE DE ALUNOS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 gap-1">

            <a class="nav-link text-white active" href="" style="padding-left: 7px;">
              <li class="nav-item d-flex align-items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <p class="m-0">Cadastrar Aluno</p>
              </li>
            </a>

            <a class="nav-link text-white" href="http://localhost/crudDev/User/listarAluno" style="padding-left: 7px;">
              <li class="nav-item d-flex align-items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg>
                <p class="m-0">Listar Aluno(s)</p>
              </li>
            </a>

          </ul>

          <hr>

          <div class="container d-flex flex-column gap-3 justify-content-between" style="height: 60vh;">

            <div class="d-flex flex-column gap-3">
              <form action="http://localhost/crudDev/User/editUser">
                <button class="w-100 btn btn-sm btn-primary d-flex align-items-center justify-content-between gap-2" type="submit">
                  MEU PERFIL
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z" />
                  </svg>
                </button>
              </form>

              <form method="POST" action="http://localhost/crudDev/User/logout">
                <button class="w-100 btn btn-sm btn-danger d-flex align-items-center justify-content-between gap-2" type="submit" value="logout">
                  SAIR
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- toast error senha length-->
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

  <!-- toast error senha -->
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

  <!-- toast error CPF -->
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
        Cadastrado com sucesso
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

  <!-- toast success perfil att -->
  {% if error_cad == 'success_perfil' %}
  <div class="toast align-items-center text-white bg-success border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccess">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        Perfil atualizado com sucesso
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
    <form method="POST" action="http://localhost/crudDev/User/cadastrarAluno" class="row justify-content-center g-2 m-auto needs-validation mt-5" style="padding: 30px; " novalidate>
      <div>
        <label class="form-label">Nome</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
          </span>
          <input type="text" class="form-control" id="name" name="nome" aria-describedby="inputGroupPrepend" placeholder="Digite o nome" required>
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
          <input type="email" class="form-control" name="email" aria-describedby="inputGroupPrepend" placeholder="Digite o e-mail" required>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">CPF</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" />
            </svg>
          </span>
          <input type="text" class="form-control" id="inputCpf" name="cpf" aria-describedby="inputGroupPrepend" placeholder="Digite o CPF" required>
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
        <label class="form-label">Matrícula</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
              <path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75z" />
            </svg>
          </span>
          <input type="text" class="form-control" name="matricula" aria-describedby="inputGroupPrepend" value="{{ randomNumber }}" readonly style="color: gray">
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Senha</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <strong>***</strong>
          </span>
          <input type="password" class="form-control" id="password" name="senha" aria-describedby="inputGroupPrepend" placeholder="Digite a senha" maxlength="10" required>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Conf. Senha</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">
            <strong>***</strong>
          </span>
          <input type="password" class="form-control" id="conf_senh" name="conf_senha" aria-describedby="inputGroupPrepend" placeholder="Confirme a senha" maxlength="10" required>
        </div>
      </div>
      <div>
        <div class="col-md-3">
          <label class="form-label">Aluno Ativo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
              </svg>
            </span>
            <select class="form-select" name="acesso" required>
              <option selected disabled value="">Escolha...</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
        </div>
      </div>

      <button class="btn btn-success mt-5" type="submit" id="liveToastBtn" onclick="validaSenha()">Cadastrar</button>

    </form>
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="http://localhost/crudDev/App/View/cadastrar/script.js"></script>
</body>

</html>
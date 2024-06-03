<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/crudDev/App/View/listar/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/crudDev/App/View/listar/style.css">
  <title>Listar</title>
</head>

<body>


  <!-- nav -->
  <nav class="navbar bg-dark fixed-top">
    
    <div class="container-fluid">
      <img src="https://www.kaleida.co.uk/app/uploads/2015/09/education-icon.png" alt="Logo" width="55" height="35" class="d-inline-block align-text-top">
      <h4 class="text-center text-light m-0">LISTA DE ALUNOS</h4>
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

            <a class="nav-link text-white" href="http://localhost/crudDev/User/cadastrarAluno" style="padding-left: 7px;">
              <li class="nav-item d-flex align-items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <p class="m-0">Cadastrar Aluno</p>
              </li>
            </a>

            <a class="nav-link text-white active" href="" style="padding-left: 7px;">
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

  <!-- toast error delete -->
  <?php if ($_SESSION['error_del'] == 'error_delete') : ?>
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastErrorDelete">
      <div class="d-flex">
        <div class="toast-body d-flex align-items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
          </svg>
          Não é possível excluir esse usuário
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        toastError();
      });
    </script>
  <?php endif ?>

  <!-- toast success delete -->
  <?php if ($_SESSION['error_del'] == 'success_delete') : ?>
    <div class="toast align-items-center text-white bg-success border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccessDelete">
      <div class="d-flex">
        <div class="toast-body d-flex align-items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
          </svg>
          Usuário excluído com sucesso
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        toastSuccess();
      });
    </script>
  <?php endif ?>

  <main class="d-flex flex-wrap gap-3 mt-5" style="padding: 20px; max-width: 940px; min-width: 440px; margin: 0 auto">

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">CPF</th>
          <th scope="col">Matricula</th>
          <th scope="col">Ativo</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($alunos as $aluno) : ?>
          <tr>
            <th><?php echo $aluno['id_aluno']; ?></th>
            <td><?php echo $aluno['nome']; ?></td>
            <td><?php echo $aluno['email']; ?></td>
            <td><?php echo $aluno['cpf']; ?></td>
            <td><?php echo $aluno['matricula']; ?></td>
            <td>
              <?php if ($aluno['acesso'] == 'Sim') : ?>  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill text-success" viewBox="0 0 16 16">
                  <circle cx="8" cy="8" r="8"/>
                </svg>
              <?php else : ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill text-danger" viewBox="0 0 16 16">
                  <circle cx="8" cy="8" r="8"/>
                </svg>
              <?php endif ?>
            </td>
            <td>
              <div class="d-flex gap-2 align-items-center justify-content-center">

                <!-- editar -->
                <form method="POST" action="http://localhost/crudDev/User/editAluno">
                  <input type="hidden" name="edit_id_aluno" value="<?php echo $aluno['id_aluno']; ?>">
                  <button type="submit" class="btn btn-primary btn-sm d-flex gap-2 align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg>
                  </button>
                </form>

                <!-- excluir -->
                <form method="POST" action="http://localhost/crudDev/User/excluirAluno">
                  <input type="hidden" name="aluno_id" value="<?php echo $aluno['id_aluno']; ?>">
                  <button type="submit" class="btn btn-danger btn-sm d-flex gap-2 align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                    </svg>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </main>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="http://localhost/crudDev/App/View/listar/script.js"></script>
</body>

</html>
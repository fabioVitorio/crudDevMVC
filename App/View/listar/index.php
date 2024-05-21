<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/crudDev/App/View/listar/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Listar</title>
</head>

<body>

  <!-- nav -->
  <nav class="navbar bg-dark border-bottom border-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://codebuilding.com/wp-content/uploads/2023/06/CODE-LOGO-HERO.png" alt="Logo" width="110" height="35" class="d-inline-block align-text-top">
      </a>
      <h3 class="text-center text-light">LISTA DE DESENVOLVEDORES</h3>
      <div class="d-flex gap-3 m-0 justify-content-center align-items-center">
        <form method="POST" action="http://localhost/crudDev/User/index">
          <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
        </form>
        <form method="POST" action="http://localhost/crudDev/User/logout">
          <button class="btn btn-outline-danger" type="submit" value="logout">Sair</button>
        </form>
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
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccessDelete">
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
        toastSuccess();
      });
    </script>
  <?php endif ?>

  <main class="d-flex flex-wrap gap-3" style="padding: 20px; max-width: 940px; min-width: 440px; margin: 0 auto">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Github</th>
          <th scope="col">Função</th>
          <th scope="col">Acesso</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
          <tr>
            <th><?php echo $usuario['id_usuario']; ?></th>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
              <a href="<?php echo $usuario['github']; ?>" style="text-decoration: none;" target="_blank">
                <button type="button" class="btn btn-dark btn-sm d-flex gap-2 align-items-center justify-content-center">Acessar</button>
              </a> 
            </td>
            <td><?php echo $usuario['funcao']; ?></td>
            <td><?php echo $usuario['acesso']; ?></td>
            <td>
              <div class="d-flex gap-2 align-items-center justify-content-center">
                <!-- editar -->
                <button type="button" class="btn btn-primary btn-sm d-flex gap-2 align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                  </svg>
                </button>

                <!-- excluir -->
                <form method="POST" action="http://localhost/crudDev/User/excluir">
                  <input type="hidden" name="user_id" value="<?php echo $usuario['id_usuario']; ?>">
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
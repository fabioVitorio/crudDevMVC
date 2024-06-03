<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/crudDev/App/View/login/style.css">
    <link rel="icon" type="image/x-icon" href="http://localhost/frota/App/View/assets/img/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
    <title>Cadastro</title>
</head>

<body>

    <!-- bubbles -->
    <div class="col-md-12">
        <ul class="bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- toast error senha length-->
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2 test2" role="alert" aria-live="assertive" aria-atomic="true" id="toastErrorSenhaLength" style="z-index: 9999;">
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
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastErrorSenha" style="z-index: 9999;">
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
    {% if error_cad_user == 'error_mail' %}
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastError" style="z-index: 9999;">
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
    {% if error_cad_user == 'error_cpf' %}
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed end-0 me-3 mt-2" role="alert" aria-live="assertive" aria-atomic="true" id="toastError" style="z-index: 9999;">
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

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100" style="padding: 0px;">

                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-6 m-0 test" style="padding: 30px; border: 1px solid #f1f1f1; border-radius: 5px; box-shadow: rgba(149, 157, 165, 0.7) 0px 8px 24px; background-color: #fff">
                    <form method="POST" action="http://localhost/crudDev/Login/cadastrarUser" class="needs-validation test" novalidate>

                        {% if msg_error %}
                        <div id="errorSenha">
                            <p>Usuário ou senha inválido(s)</p>
                        </div>
                        {% endif %}

                        <div class="divider d-flex align-items-center my-4 mt-0">
                            <p class="text-center fw-bold mx-3 mb-0">CADASTRAR</p>
                        </div>

                        <!-- Nome input -->
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="form3Example3">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required />
                        </div>

                        <!-- CPF input -->
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="form3Example3">CPF</label>
                            <input type="text" id="inputCpf" name="cpf" class="form-control" placeholder="Digite seu CPF" required />
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                new Cleave('#inputCpf', {
                                    delimiters: ['.', '.', '-'],
                                    blocks: [3, 3, 3, 2],
                                    numericOnly: true
                                });
                            });
                        </script>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="form3Example3">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Digite seu email" required />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Senha</label>
                            <input type="password" id="password" name="senha" class="form-control " placeholder="Digite sua senha" required maxlength="10" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Confirmar Senha</label>
                            <input type="password" id="conf_senh" name="conf_senha" class="form-control " placeholder="Confirme sua senha" required maxlength="10" />
                        </div>

                        <div class="text-center text-lg-start mt-4 mb-2 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn col-md-12 bg-dark" onclick="validaSenha()" style="color: #fff; padding-left: 2.5rem; padding-right: 2.5rem;">Cadastrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="http://localhost/crudDev/App/View/cadastrarUser/script.js"></script>
</body>

</html>
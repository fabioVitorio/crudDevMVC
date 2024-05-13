<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/crudDev/App/View/login/style.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/frota/App/View/assets/img/favicon.png">
        <title>Login</title>
    </head>

    <body>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center vh-100" style="padding: 25px;">
                    <div class="col-md-9 col-lg-6 col-xl-5 row d-flex justify-content-center align-items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Logo_CODE.svg/1280px-Logo_CODE.svg.png" class="img-fluid" id="img">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="padding: 30px; border: 1px solid #f1f1f1; border-radius: 5px; box-shadow: rgba(149, 157, 165, 0.4) 0px 8px 24px;">
                        <form method="POST" action="http://localhost/crudDev/Login/check" class="needs-validation" novalidate>
                            
                            {% if msg_error %}
                                <div id="errorSenha">
                                    <p>Usuário ou senha inválido(s)</p>
                                </div>
                            {% endif %}

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">CONTROLE DE DEV's</p>
                            </div>
                
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Usuário</label>
                                <input type="email" name="email" id="form3Example3" class="form-control"
                                placeholder="Digite seu usuário" required/>
                            </div>
                
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Senha</label>
                                <input type="password" name="senha" id="form3Example4" class="form-control "
                                placeholder="Digite sua senha" required/>
                            </div>
                
                            <div class="text-center text-lg-start mt-4 mb-4 pt-2">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn col-md-12 bg-dark"
                                style="color: #fff; padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="http://localhost/crudDev/App/View/login/script.js"></script>
    </body>
</html>
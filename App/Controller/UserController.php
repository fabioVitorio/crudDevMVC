<?php 
    require_once './vendor/autoload.php';

    class UserController{

        public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, []);
            $template = $twig->load('cadastrar/index.html');
            $error['error_cad'] = $_SESSION['error_cad'] ?? null;
            unset($_SESSION['error_cad']);
            return $template->render($error);
        }

        public function cadastrar(){
            
            try {
                $user = new Usuario();

                $user->setNome($_POST['nome']);
                $user->setEmail($_POST['email']);
                $user->setSenha($_POST['senha']);
                $user->setGithub($_POST['github']);
                $user->setFuncao($_POST['funcao']);

                $user->insert();

                $_SESSION['error_cad'] = 'success';

            } catch (\Exception $e) {
                $_SESSION['error_cad'] = 'error';
                header('Location: http://localhost/crudDev/User');
            }
            
        }

        public function listar(){
            $user = new Usuario();

            $usuarios = $user->select();
            
            include './App/View/listar/index.php';

        }

        public function logout(){
            unset($_SESSION['usr']);
            session_destroy();
            header('Location: http://localhost/crudDev/login');
        }

    }


?>
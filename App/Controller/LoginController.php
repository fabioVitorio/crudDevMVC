<?php 
    require_once './vendor/autoload.php';

    class LoginController{

        public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, []);
            $template = $twig->load('login/index.php');
            $error['msg_error'] = $_SESSION['msg_error'] ?? null;
            return $template->render($error);
        }

        public function check(){

            try {
                $user = new Usuario();
                $user->setEmail($_POST['email']);
                $user->setSenha($_POST['senha']);
                $user->validaLogin();

                header('Location: http://localhost/crudDev/User');
            } catch (\Exception $e) {
                $_SESSION['msg_error'] = 'error';
                header('Location: http://localhost/crudDev/Login/index');
            }
            
        }

        public function userCad(){
            try {
                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader, []);
                $template = $twig->load('cadastrarUser/index.php');
                $error['error_cad_user'] = $_SESSION['error_cad_user'] ?? null;
                unset($_SESSION['error_cad_user']);
                return $template->render($error);

            } catch (\Exception $e) {
                header('Location: http://localhost/crudDev/User');
                exit();
            }
        }

        public function cadastrarUser(){
            
            try {
                $user = new Usuario();

                $user->setNome($_POST['nome']);
                $user->setCPF($_POST['cpf']);
                $user->setEmail($_POST['email']);
                $user->setSenha($_POST['senha']);

                $user->insert();

                $_SESSION['msg_error'] = 'success';

            } catch (\Exception $e) {
                
                header('Location: http://localhost/crudDev/Login/userCad');
                exit();
            }
            
        }
    }


?>
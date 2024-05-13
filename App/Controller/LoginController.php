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
                $_SESSION['msg_error'] = true;
                header('Location: http://localhost/crudDev/Login/index');
            }
            
        }
    }


?>
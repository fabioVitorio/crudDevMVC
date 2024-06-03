<?php 
    require_once './vendor/autoload.php';

    class UserController{

        public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, []);
            $template = $twig->load('cadastrar/index.php');
            $data = [];
            $data['error_cad'] = $_SESSION['error_cad'] ?? null;
            unset($_SESSION['error_cad']);
            $data['randomNumber'] = '2024'.mt_rand(10000000, 99999999);
            return $template->render($data);
        }

        public function cadastrarAluno(){
            
            try {
                $aluno = new Aluno();

                $aluno->setNome($_POST['nome']);
                $aluno->setEmail($_POST['email']);
                $aluno->setCPF($_POST['cpf']);
                $aluno->setMatricula($_POST['matricula']);
                $aluno->setSenha($_POST['senha']);
                $aluno->setAcesso($_POST['acesso']);

                $aluno->insert();

                $_SESSION['error_cad'] = 'success';

            } catch (\Exception $e) {
                header('Location: http://localhost/crudDev/User');
            }
            
        }

        public function listarAluno(){

            try {
                $aluno = new Aluno();
                $alunos = $aluno->select();

                $_SESSION['error_del'] = null;
                
                include './App/View/listar/index.php';

            } catch (\Exception $e) {
                header('Location: http://localhost/crudDev/User');
            }
            
            
        }

        public function excluirAluno(){
            try {
                $aluno = new Aluno();
                $aluno->setId($_POST['aluno_id']);
                $aluno->getId();
                $aluno->delete();

                header('Location: http://localhost/crudDev/User/listarAluno');

            } catch (\Exception $e) {
                header('Location: http://localhost/crudDev/User/listarAluno');
                
            }
            
        }

        public function editAluno(){  
            $_SESSION['id_aluno_id'] = $_POST['edit_id_aluno'];

            $alunoModel = new Aluno();
            $aluno = $alunoModel->getAlunoById($_POST['edit_id_aluno']);

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, []);
            $template = $twig->load('editar/index.php');
            return $template->render(['aluno' => $aluno]); 
            
        }

        public function editarAluno(){

            try {

                $aluno = new Aluno();
                $aluno->setId($_SESSION['id_aluno_id']);
                $aluno->setNome($_POST['nome']);
                $aluno->setEmail($_POST['email']);
                $aluno->setCPF($_POST['cpf']);
                $aluno->setSenha($_POST['senha']);
                $aluno->setAcesso($_POST['acesso']);
    
                $aluno->update();

                header('Location: http://localhost/crudDev/User/listarAluno');
                
            } catch (\Exception $e) {
                echo $e->getMessage();
                header('Location: http://localhost/crudDev/User/listarAluno');
                
            }
        }

        public function editUser(){  

            $usuarioModel = new Usuario();
            $usuario = $usuarioModel->getUserById($_SESSION['usr']);

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, []);
            $template = $twig->load('perfil/index.php');
            return $template->render(['usuario' => $usuario]); 
            
        }

        public function editarUsuario(){

            try {
                $usuario = new Usuario();
                $usuario->setId($_SESSION['usr']);
                $usuario->setNome($_POST['nome']);
                $usuario->setEmail($_POST['email']);
                $usuario->setCPF($_POST['cpf']);
                $usuario->setSenha($_POST['senha']);
    
                $usuario->update();

                $_SESSION['error_cad'] = 'success_perfil';

                header('Location: http://localhost/crudDev/User/cadastrarAluno');
                
            } catch (\Exception $e) {
                echo $e->getMessage();
                header('Location: http://localhost/crudDev/User/listarAluno');
                
            }
        }


        public function logout(){
            unset($_SESSION['usr']);
            session_destroy();
            header('Location: http://localhost/crudDev/login');
        }

    }


?>
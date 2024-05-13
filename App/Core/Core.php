<?php 

    require_once './App/Controller/LoginController.php';

    class Core{

        private $url;
        private $controller;
        private $method = 'index';
        private $params;
        private $usuario;

        public function __construct(){
            $this->usuario = $_SESSION['usr'] ?? NULL;
        }

        public function start($request){
            
            if($request['url']){
                //separa url por / e armazena na variavel url - .htaccess
                $this->url = explode('/', $request['url']);

                $this->controller = ucfirst($this->url[0]).'Controller';
                array_shift($this->url); 
    
                if(isset($this->url[0]) && $this->url != ''){
                    $this->method = $this->url[0];
                    array_shift($this->url); 
                    
                    if(isset($this->url[0]) && $this->url != ''){
                        $this->params = $this->url;
                    }
                }
            }

            if($this->usuario){ //se o user estiver logado no sistema

                $pg_permitida = ['UserController'];
                if(!isset($this->controller) || !in_array($this->controller, $pg_permitida)){
                    $this->controller = 'UserController';
                    $this->method = 'index';
                    $this->params = array();
                }


            } else{ //se o user não estiver logado no sistema
                $pg_permitida = ['LoginController'];

                if(!isset($this->controller) || !in_array($this->controller, $pg_permitida)){
                    $this->controller = 'LoginController';
                    $this->method = 'index';
                    $this->params = array();
                }
            }
            
            
            echo call_user_func(array(new $this->controller, $this->method), $this->params);

        }
    }


?>
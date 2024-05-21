<?php 

    use App\Config\Connection;

    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $github;
        private $funcao;
        private $acesso;

        public function insert(){
            $conn = Connection::getConnection();

            //verifica se email já existe
            $sql = 'SELECT * FROM usuario WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->execute();

            if($stmt->rowCount()){
                throw new \Exception('Email já cadastrado');
            }

            $senhaCrip = password_hash($this->senha, PASSWORD_DEFAULT);

            //insere novo usuário no banco
            $sql = 'INSERT INTO usuario (nome, email, senha, github, funcao, acesso) VALUES (:nome, :email, :senha, :github, :funcao, :acesso)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $senhaCrip);
            $stmt->bindValue(':github', $this->github);
            $stmt->bindValue(':funcao', $this->funcao);
            $stmt->bindValue(':acesso', $this->acesso);

            
            if ($stmt->execute()) {
                header('Location: http://localhost/crudDev/Cadastrar');
                return true;
            } else {
                throw new \Exception('Erro ao cadastrar o usuário.');
            }
        }

        public function select(){
            $conn = Connection::getConnection();
            $sql = 'SELECT * FROM usuario';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $usuarios;
        }

        public function delete(){
            $conn = Connection::getConnection();

            if($this->id != $_SESSION['usr']){
                $sql = 'DELETE from usuario WHERE id_usuario = :id';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $this->id);
                $stmt->execute();

                return true;
            }

            throw new \Exception('Error ao excluir');
            
        }
        
        public function validaLogin(){
            $conn = Connection::getConnection();
            
            $sql = 'SELECT * FROM usuario WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->execute();

            //verifica se há o email no banco
            if($stmt->rowCount()){
                $result = $stmt->fetch();

                //verifica se a senha está correta
                if(password_verify($this->senha, $result['senha'])){
                    $_SESSION['usr'] = $result['id_usuario'];
                    return true;
                }
            }

            throw new \Exception('Login Invalido');
        }


        // ---

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getSenha() {
            return $this->senha;
        }
    
        public function setSenha($senha) {
            $this->senha = $senha;
        }
        
        public function getGithub() {
            return $this->github;
        }
    
        public function setGithub($github) {
            $this->github = $github;
        }

        public function getFuncao() {
            return $this->funcao;
        }
    
        public function setFuncao($funcao) {
            $this->funcao = $funcao;
        }

        public function getAcessp() {
            return $this->acesso;
        }
    
        public function setAcesso($acesso) {
            $this->acesso = $acesso;
        }

    }

?>
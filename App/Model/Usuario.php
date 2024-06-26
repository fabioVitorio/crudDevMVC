<?php 

    use App\Config\Connection;

    class Usuario{
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $senha;

        public function insert(){
            $conn = Connection::getConnection();

            //verifica se CPF já existe
            $sql = 'SELECT * FROM usuario WHERE cpf = :cpf';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->execute();

            if($stmt->rowCount()){
                $_SESSION['error_cad_user'] = 'error_cpf';
                throw new \Exception('CPF já cadastrado');
            }
            
            //verifica se email já existe
            $sql = 'SELECT * FROM usuario WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->execute();

            if($stmt->rowCount()){
                $_SESSION['error_cad_user'] = 'error_mail';
                throw new \Exception('Email já cadastrado');
            }

            $senhaCrip = password_hash($this->senha, PASSWORD_DEFAULT);

            //insere novo usuário no banco
            $sql = 'INSERT INTO usuario (nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $senhaCrip);

            
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

        public function update(){
            $conn = Connection::getConnection();

            // verifica se email já existe
            $sql = 'SELECT * FROM usuario WHERE email = :email AND id_usuario != :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();

            if ($stmt->rowCount()) {
                $_SESSION['error_cad'] = 'error';
                throw new \Exception('Email já cadastrado');
            }

            // verifica se CPF já existe
            $sql = 'SELECT * FROM usuario WHERE cpf = :cpf AND id_usuario != :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();

            if ($stmt->rowCount()) {
                $_SESSION['error_cad'] = 'error_cpf';
                throw new \Exception('CPF já cadastrado');
            }

            $senhaCrip = password_hash($this->senha, PASSWORD_DEFAULT);

            //atualiza usuário no banco
            $sql = 'UPDATE usuario SET nome = :nome , email = :email, cpf = :cpf, senha = :senha
                    WHERE id_usuario = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->bindValue(':senha', $senhaCrip);
            $stmt->bindValue(':id', $this->id);
            

            if ($stmt->execute()) {
                return true;
            } else {
                throw new \Exception('Erro ao cadastrar o usuário.');
            }
        }

        public function getUserById($id){
            $conn = Connection::getConnection();
            $sql = 'SELECT * FROM usuario WHERE id_usuario = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
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

        public function getCPF() {
            return $this->cpf;
        }
    
        public function setCPF($cpf) {
            $this->cpf = $cpf;
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

    }

?>
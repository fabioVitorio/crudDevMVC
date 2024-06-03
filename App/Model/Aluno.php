<?php 

    use App\Config\Connection;

    class Aluno{
        private $id;
        private $nome;
        private $email;
        private $cpf;
        private $matricula;
        private $senha;
        private $acesso;

        public function insert(){
            $conn = Connection::getConnection();

            //verifica se email já existe
            $sql = 'SELECT * FROM aluno WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->execute();

            if($stmt->rowCount()){
                $_SESSION['error_cad'] = 'error';
                throw new \Exception('Email já cadastrado');
            }

            //verifica se CPF já existe
            $sql = 'SELECT * FROM aluno WHERE cpf = :cpf';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->execute();

            if($stmt->rowCount()){
                $_SESSION['error_cad'] = 'error_cpf';
                throw new \Exception('CPF já cadastrado');
            }

            $senhaCrip = password_hash($this->senha, PASSWORD_DEFAULT);

            //insere novo usuário no banco
            $sql = 'INSERT INTO aluno (nome, email, cpf, matricula, senha, id_usuario, acesso) VALUES (:nome, :email, :cpf, :matricula, :senha, :id_usuario, :acesso)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->bindValue(':matricula', $this->matricula);
            $stmt->bindValue(':senha', $senhaCrip);
            $stmt->bindValue(':id_usuario', $_SESSION['usr']);
            $stmt->bindValue(':acesso', $this->acesso);

            
            if ($stmt->execute()) {
                header('Location: http://localhost/crudDev/cadastrarAluno');
                return true;
            } else {
                throw new \Exception('Erro ao cadastrar o usuário.');
            }
        }

        public function select(){
            $conn = Connection::getConnection();
            $sql = 'SELECT * FROM aluno';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $alunos;
        }

        public function delete(){
            $conn = Connection::getConnection();

            $sql = 'DELETE from aluno WHERE id_aluno = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            return true;
            
            throw new \Exception('Error ao excluir');   
        }

        public function update(){
            $conn = Connection::getConnection();

            // verifica se email já existe
            $sql = 'SELECT * FROM aluno WHERE email = :email AND id_aluno != :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();

            if ($stmt->rowCount()) {
                $_SESSION['error_cad'] = 'error';
                throw new \Exception('Email já cadastrado');
            }

            // verifica se CPF já existe
            $sql = 'SELECT * FROM aluno WHERE cpf = :cpf AND id_aluno != :id';
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
            $sql = 'UPDATE aluno SET nome = :nome , email = :email, cpf = :cpf, senha = :senha, acesso = :acesso
                    WHERE id_aluno = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':cpf', $this->cpf);
            $stmt->bindValue(':senha', $senhaCrip);
            $stmt->bindValue(':acesso', $this->acesso);
            $stmt->bindValue(':id', $this->id);
            

            if ($stmt->execute()) {
                return true;
            } else {
                throw new \Exception('Erro ao cadastrar o usuário.');
            }
        }

        public function getAlunoById($id){
            $conn = Connection::getConnection();
            $sql = 'SELECT * FROM aluno WHERE id_aluno = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
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

        public function getCPF() {
            return $this->cpf;
        }

        public function setCPF($cpf) {
            $this->cpf = $cpf;
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
    
        public function getSenha() {
            return $this->senha;
        }
    
        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getAcesso() {
            return $this->acesso;
        }
    
        public function setAcesso($acesso) {
            $this->acesso = $acesso;
        }

    }

?>
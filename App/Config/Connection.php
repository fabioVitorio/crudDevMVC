<?php 

    namespace App\Config;

    class Connection {

    protected static $conn;

    private function __construct() {
        $db_host = "localhost";
        $db_nome = "db_dev"; 
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";

        try{
            self::$conn = new \PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conn->exec('SET NAMES utf8');

            //echo "** Class connection Conexão bem sucedida **";
        }
        catch(\PDOException $e){
            echo "Conexão falhou";
        }
    }

    public static function getConnection(){
        if(!self::$conn){
            new Connection();
        }
        return self::$conn;
    }
}
?>
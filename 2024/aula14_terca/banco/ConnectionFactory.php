<?php
class ConnectionFactory{
    static $conn;

    public function __construct(){
        $database = "mysql"; // Coloque o nome do seu bd
        $user = "root";
        $pass = "";
        $host = "localhost";
        $port = "3307"; // Na faculdade MySQL do XAMPP é 3307
        try{
            $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $pass);
            echo "conectado";
        }catch(PDOException $ex){
            echo "Erro! ". $ex->getMessage();
        }
    }
}
?>
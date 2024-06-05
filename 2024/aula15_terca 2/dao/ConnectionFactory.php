<?php
class ConnectionFactory{
    static $conn;

    public static function getConnection(){
        if(!isset($conn)){
            $database = "app_modelo"; // Coloque o nome do seu bd
            $user = "root";
            $pass = "";
            $host = "localhost";
            $port = "3306"; // Na faculdade MySQL do XAMPP é 3307
            try{
                $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $pass);
                echo "conectado";
                return $conn;
            }catch(PDOException $ex){
                echo "Erro! ". $ex->getMessage();
                return null;
            }
        }
        return $conn;
    }
}
?>
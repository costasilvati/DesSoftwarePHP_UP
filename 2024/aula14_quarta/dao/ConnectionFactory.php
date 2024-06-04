<?php
class ConnectionFactory{
    static $connection;

    public static function getConnection(){
        $host = "localhost";
        $dbname = "test";
        $userDb = "root";
        $pass = "";
        $port = "3307";
        try{
            $connection = new PDO("mysql:host=$host;dbname=$dbname;port=$port",$userDb, $pass);
            echo "Conectado";
        }catch(PDOException $ex){
            echo "Erro! ".$ex->getMessage();
        }
    }
}
?>
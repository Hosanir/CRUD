
<?php
//quando o arquivo só tem php não precisa fechar a tag
require_once __DIR__ ."/../config.php";


class Conexao {
    public static function conectar(){

        $conn = new PDO(DRIVE . ':host=' . LOCAL_DO_BANCO . '; dbname=' . NOME_DO_BANCO . ';chartset='. CHARSET ,USUARIO, SENHA);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    }
}
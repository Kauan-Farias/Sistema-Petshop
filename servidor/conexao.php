<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema-petshop";

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "ERRO";
}

?>
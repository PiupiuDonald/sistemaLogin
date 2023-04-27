<?php 

$usuario = 'root';
$senha = '';
$database = 'Login';
$host = 'localhost';

$mysqli =  new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die('Falha ao conectar ao Banco de dados :' . $mysqli->error);
}
?>
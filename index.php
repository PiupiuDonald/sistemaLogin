<?php
include ('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "preencha seu email";
    }
    else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("falha na execução do codigo SQL:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];

            header("location: painel.php");

        }else{
            echo '<script>alert("Falha ao logar! Email ou senha incorretos")</script>';
        }
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Entrar</h1>
    <form action="" method="POST">
    <p>
        <label for="">Email</label>
        <input type="text" name="email">
    </p>
    <p>
        <label for="">Senha</label>
        <input type="password" name="senha">
    </p>
    <button type="submit">Entrar</button>
    </form>
</body>
</html>
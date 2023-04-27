<?php
include ('protect.php');
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem vindo ao painel <?php echo $_SESSION['email']; ?> 
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
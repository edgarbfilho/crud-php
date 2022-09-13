<?php
require 'config.php';

$senha = "123";

if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', telefone = '$telefone'";
    $pdo->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<br>
       <a href="index.php">Voltar para a Página Inicial</a> 
       <br><br>
        <form method="POST">
            Nome:<br>
            <input type="text" name="nome" /><br><br>
            E-mail:<br>
            <input type="email" name="email" /><br><br>
            Telefone:<br>
            <input type="tel" name="telefone" /><br><br>

            <input type="submit" value="Cadastrar" />
        </form>

    </body>
</html>
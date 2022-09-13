<?php
require 'config.php';


$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}
    
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = '$id'";
    $pdo->query($sql);
    
    header("Location: index.php");
    
}




    
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    
    if($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    } else {
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
            <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br><br>
            E-mail:<br>
            <input type="email" name="email" value="<?php echo $dado['email']; ?>" /><br><br>
            Telefone:<br>
            <input type="tel" name="telefone" value="<?php echo $dado['telefone']; ?>" /><br><br>
            

            <input type="submit" value="Atualizar" />
        </form>

    </body>
</html>
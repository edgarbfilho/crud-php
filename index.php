 <?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CONTROLE DE USUÁRIOS</title>
    </head>
    <body>
       <br>
       <a href="incluir.php">Adicionar Novo Contato</a> 
       <br><br>
        

            
             <?php
             $sql = "SELECT * FROM usuarios";
             $sql = $pdo->query($sql);
             if($sql->rowCount() > 0) {

              $res = $sql->fetchAll();?>

                      <table border="1" width="100%">
            
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Ações</td>
            </tr>

            <?php
                 
               foreach ($res as $usuario) {
                   
                   echo '<tr>';
                   echo '<td>'.$usuario['nome'].'</td>';
                   echo '<td>'.$usuario['email'].'</td>';
                   echo '<td>'.$usuario['telefone'].'</td>';
                   echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'" onclick="return confirm('."'Tem certeza que deseja excluir esse registro?'".')">Excluir</a></td>';
                   echo '</tr>';
               }
             } else {
              echo "Não existem resgistros...";
             }
             ?>
            
            
        </table>
        
    </body>
</html>
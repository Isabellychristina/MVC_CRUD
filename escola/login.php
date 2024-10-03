
<?php

include ("interacao.php");

if(!empty($_POST['id'])){
    $sql = "DELETE FROM usuarios WHERE id=".$_POST['id'];
    $conexao->query($sql);
    
}

            
            $sql = "SELECT id, nome, usuario FROM usuarios";
            $dados = $conexao->query($sql);
            
            echo "<table><tr><th>ID</th><th>NOME</th><th>USUARIOS</th><th>";
            while($row = $dados ->fetch_assoc()){
                echo 
                
                "<tr><td>".$row["id"].
                "</td><td>".$row["nome"].
                "</td><td>".$row["usuario"].
                "</td><td>
                
                <form action= 'login.php' method='POST'>
                
                <input type='hidden' name='id' value='".$row["id"]."'>
                
                <input type='submit' value='Deletar'>                                           
                
                
                </form>
                </tr>";
            }
            
            
            ?>


<html>
<body>

<form action="insert.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="text" name="senha"><br>
    <input type="submit" value="Inserir">
    
</form>


</body>
</html>


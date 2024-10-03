<?php 

include('conexao.php');

$retorno = $conexao->exec($delete);

?>

<form action="delete.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>
        Senha: <input type="text" name="senha" value="<?php echo $senha; ?>"><br>
        <input type="hidden" name="emailantigo" value="<?php echo $email; ?>"><br>
        <input type="submit" value="Deletar">
        
</form>
<?php 

include('interacao.php');

$retorno = $conexao->exec($delete);

?>

<form action="delete.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
        Usuario: <input type="text" name="email" value="<?php echo $usuario; ?>"><br>
        Senha: <input type="text" name="senha" value="<?php echo $senha; ?>"><br>
        <input type="hidden" name="antigo" value="<?php echo $; ?>"><br>
        <input type="submit" value="Deletar">
        
</form>
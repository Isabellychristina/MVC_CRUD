<?php

    include("interacao.php");
    $gusuario = $_GET["usuario"];

    if (!empty($_GET['email'])){
        $query = 'SELECT * FROM usuario WHERE usuario = '. "'$gusuario'";
        $retorno = $conexao-> query($query);
        $dados = $retorno->fetchAll(PDO::FETCH_ASSOC);

    
    foreach($dados as $dado){
        $nome = $dado['nome'];
        $usuario = $dado['usuario'];
        $senha = $dado['senha'];
        
    }
       
    }else{
        $nome = "" ;
        $usuario = "";
        $senha = "";
        $emailantigo = "";
    }
    
    ?>
    

<html>
<body>
    


    <form action="update.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
        Usuario: <input type="text" name="email" value="<?php echo $usuario; ?>"><br>
        Senha: <input type="text" name="senha" value="<?php echo $senha; ?>"><br>
        <input type="hidden" name="usuarioantigo" value="<?php echo $usuario; ?>"><br>
        <input type="submit" value='Atualizar'>
        
        
    </form>

</body>
</html>
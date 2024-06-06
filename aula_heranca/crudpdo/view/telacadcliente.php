<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Cliente</title>
</head>
<body>
    <form action="../model/gravarcliente.php" method="POST">
        Nome:<br>    
        <input type="text" name="cxnome"><br>
        Telefone:<br>    
        <input type="text" name="cxtelefone"><br>
        E-mail:<br>    
        <input type="text" name="cxemail"><br>
        <button>Gravar</button><br><br>
    </form>
    <form action="../model/selecionarcliente.php" method="POST">
        <br><br>Pesquisa por nome<br><br>
        Nome:<br>    
        <input type="text" name="cxnome"><br>
        <button>Gravar</button>
    </form>
</body>
</html>
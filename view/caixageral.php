<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "../control/controlecaixa.php"; ?>
</head>
<body>
    <?php
        $dado = new ControleCaixa;
        $dado->setNome("Matutino");
        echo "Nome: ".$dado->getNome();
        
        echo "<h1>Segunda Parte</h1>";
        $dado->caixas("Mariana", 800,120);
        echo "<br>";
        $dado->caixas("Mario",780,110);
        echo "<br>";
        $dado->caixas("Domenico",1000,110);
    ?>
</body>
</html>
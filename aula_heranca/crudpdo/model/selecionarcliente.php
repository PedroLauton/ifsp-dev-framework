<?php
    include_once "../control/passing.php";
    include_once "../factory/conexao.php";

    $dados = new Passing;

    $dados->setNome($_POST["cxnome"]);

    $nome = $dados->getNome();

    if($dados->getNome() != ""){
        $conn = new Caminho;
        $query = "SELECT nome FROM tbcliente WHERE nome=:nome";
        $cadastrar = $conn->getConn()->prepare($query);
        $cadastrar->bindParam(':nome',$nome,PDO::PARAM_STR);
        $cadastrar->execute();
        if($cadastrar->rowCount()){
            echo "Dados buscados com sucesso!";
        }else{
            echo "Dados não encontrados";
        }
    }else{
        "Campos em branco";
    }
?>
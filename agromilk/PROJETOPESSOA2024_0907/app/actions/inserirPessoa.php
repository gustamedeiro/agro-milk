<?php

require_once("../config/conecta.php");
require_once("../config/validacoes.php");

$msg;

if(empty($_POST['nome'])){
    $msg = "Preencha o campo nome";
}elseif(empty($_POST['datanasc'])){
    $msg = "Preencha a data de nascimento";
}elseif(empty($_POST['email'])){
    $msg = "Preencha o campo email";
}elseif(empty($_POST['senha'])){
    $msg = "Preencha o campo senha";
}elseif(verificaEmail($_POST['email'])){
    $msg = "Email já cadastrado. Por favor, informe um email diferente";

}else{

    $nome = $_POST['nome'];
    $dataNasc = $_POST['datanasc'];
    $email = $_POST['email'];
    $senhaCrip = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    conecta();

    $sql = "INSERT INTO pessoa(nome,datanasc,email,senha)VALUES(?,?,?,?);";

    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro ao inserir.Problema no acesso ao banco de dados");
    }

    $stmt->bind_param("ssss",$nome,$dataNasc,$email,$senhaCrip);

    $stmt->execute();

    if($stmt->affected_rows > 0){
        $msg = "Pessoa cadastrada com sucesso.";
    }else{
        $msg = "Não foi possível inserir.";
    }

    desconecta();
}

header("Location: ../pages/inserirPessoaForm.php?msg={$msg}");

/* 1) Criar a sql de inserção;
    2) Preparar essa sql para executar a inserção;
    3) Vincular na SQl os parâmatros que serão inseridos na tabela;
    4)Executar a SQL (inserir os dados no banco)
    5)Verificar se a inserção foi realizada
    6)Se foi realizada com sucesso, envio 
    feedback para o usuário com essa informação; senão, informa ao usuário a falha na inserção*/










?>
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/universidade/model/UsuarioModel.php";

$usuarioModel = new UsuarioModel();

$acao = $_GET["acao"];

if($acao == "create"){
    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usuarioModel->inserir($nome, $email, $senha);

    echo "<script>alert('Usuário cadastro com sucesso'); 
                  location.href='/universidade/usuario/index.php';</script>";
}


?>
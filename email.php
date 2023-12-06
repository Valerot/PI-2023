<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'Vcecorno138@';
$dbName = 'certificado_db';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro ao conectar ao banco de dados";
} else {
    echo "Conexão concluída";
}

if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $endereco2 = $_POST['endereco2'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    // Inserir no banco de dados
    $mandarparaobanco = mysqli_query($conexao, "INSERT INTO certificado_cnpj(nome,sobrenome,nickname,email,endereco,endereco2,pais,estado,cep) VALUES ('$nome','$sobrenome','$nickname','$email','$endereco','$endereco2','$pais','$estado','$cep')");

    // Enviar e-mail
    $assunto = 'Novo Certificado Solicitado';
    $mensagem = "Nome: $nome\nSobrenome: $sobrenome\nNickname: $nickname\nE-mail: $email\nEndereço: $endereco\nEndereço 2: $endereco2\nPaís: $pais\nEstado: $estado\nCEP: $cep";

    // Substitua 'seu-email@example.com' pelo seu endereço de e-mail
    $headers = 'From: kaoan0305@gmail.com';

    mail('andrejunior1367@gmail.com', $assunto, $mensagem, $headers);
}

?>
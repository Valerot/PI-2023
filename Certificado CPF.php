<?php

  if(isset($_POST['submit']))
  {
    // print_r($_POST['nome']);
    // print_r($_POST['sobrenome']);
    // print_r($_POST['nickname']);
    // print_r($_POST['email']);
    // print_r($_POST['endereco']);
    // print_r($_POST['endereco2']);
    // print_r($_POST['pais']);
    // print_r($_POST['estado']);
    // print_r($_POST['cep']);

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

    $mandarparaobanco = mysqli_query($conexao, "INSERT INTO certificado_cnpj(nome,sobrenome,nickname,email,endereco,endereco2,pais,estado,cep) VALUES ('$nome','$sobrenome','$nickname','$email','$endereco','$endereco2','$pais','$estado','$cep')");
  }

?>

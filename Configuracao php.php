<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'certificado_db';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro ao conectar ao banco de dados";
    // }
    // else
    // {
    //     echo "Conexão concluída";
    // }

?>
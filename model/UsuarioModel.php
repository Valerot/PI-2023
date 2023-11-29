<?php

    require_once $_SERVER["DOCUMENT_ROOT"] . "/universidade/config/bd.php";


    class UsuarioModel{
        
        private $bd;

        function __construct(){

            $this->bd = BancoDados::obterConexao();
        }

        public function inserir($nome, $email, $senha){

            $insercao = $this->bd->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");

            $senhaCripto = sha1($senha);

            $insercao->bindParam(":nome", $nome);
            $insercao->bindParam(":email", $email);
            $insercao->bindParam(":senha", $senhaCripto);

            $insercao->execute();
        }

    }


?>
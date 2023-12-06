<?php

class BancoDados{

    private static $conexao;

    public static function obterConexao(){

        if(isset($conexao) == false){

            $conexao = new PDO("mysql:dbname=universidade_bd;host:localhost","root","Vcecorno138@");

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        return $conexao;
    }

}

?>
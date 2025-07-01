<?php
        require_once '../connection/connection.php';

    class Escolar{
        public function cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro){

            //A variável global $connection dentro do método essa variável e responsável pela conexão com o banco de dados
            global $connection;


            //Declaração SQL para a inserção de dados na tabela "situacao_escolar". 
            $stmt = $connection->prepare("INSERT INTO situacao_escolar (ano_conclusao, escola_frequentada, provincia, distrito, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e);");

            //Essas linhas vinculam os valores dos parâmetros às respectivas posições marcadas na declaração preparada isto evita ataques de injeção de SQL e garantir a segurança da consulta.
            $stmt->bindValue(":a",$medio);
            $stmt->bindValue(":b",$escola);
            $stmt->bindValue(":c",$provincia);
            $stmt->bindValue(":d",$distrito);
            $stmt->bindValue(":e",$id_bolseiro);
            //Esta linha executa a consulta preparada, inserindo os valores no banco de dados
            $stmt->execute();
            return true;
            
        }
    }


?>
<?php
    
    require_once '../connection/connection.php';

    class Familiares{


        public function cadastrarPai($nome_P, $segundo_P, $apelido_P, $provincia_P, $distrito_P, $data_P,$contacto1_P, $contacto2_P, $profissao_P, $patronal_P, $bairro_P, $id_bolseiro){
            global $connection;


            $stmt = $connection->prepare("INSERT INTO pai (primeiro_nome, segundo_nome, apelido, provincia, distrito, data_nascimento, contacto1, contacto2, profissao, entidade_patronal, bairro, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l );");
            $stmt->bindValue(":a",$nome_P);
            $stmt->bindValue(":b",$segundo_P);
            $stmt->bindValue(":c",$apelido_P);
            $stmt->bindValue(":d",$provincia_P);
            $stmt->bindValue(":e",$distrito_P);
            $stmt->bindValue(":f",$data_P);
            $stmt->bindValue(":g",$contacto1_P);
            $stmt->bindValue(":h",$contacto2_P);
            $stmt->bindValue(":i",$profissao_P);
            $stmt->bindValue(":j",$patronal_P);
            $stmt->bindValue(":k",$bairro_P);
            $stmt->bindValue(":l",$id_bolseiro);          
            $stmt->execute();
            return true;
        }

        public function cadastrarMae($nome_M, $segundo_M, $apelido_M, $data_M, $profissao_M, $patronal_M, $provincia_M, $distrito_M, $bairro_M, $contacto1_M, $contacto2_M, $id_bolseiro){
            global $connection;

           $stmt = $connection->prepare("INSERT INTO mae (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, contacto1, contacto2, profissao, entidade_patronal, bairro, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l);");
            $stmt->bindValue(":a",$nome_M);
            $stmt->bindValue(":b",$segundo_M);
            $stmt->bindValue(":c",$apelido_M);
            $stmt->bindValue(":d",$data_M);
            $stmt->bindValue(":e",$provincia_M);
            $stmt->bindValue(":f",$distrito_M);
            $stmt->bindValue(":g",$contacto1_M);
            $stmt->bindValue(":h",$contacto2_M);
            $stmt->bindValue(":i",$profissao_M);
            $stmt->bindValue(":j",$patronal_M);
            $stmt->bindValue(":k",$bairro_M);
            $stmt->bindValue(":l",$id_bolseiro);          
            $stmt->execute();
        }

        public function cadastrarEmergencia($nome_E, $segundo_E, $apelido_E, $parentesco_E, $bairro_E, $avenida_E, $contacto1_E, $contacto2_E, $id_bolseiro){
            global $connection;

            $stmt = $connection->prepare("INSERT INTO contacto_emergencia (primeiro_nome, segundo_nome, apelido, parentesco, contacto1, contacto2, bairro, avenida, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i);");
            $stmt->bindValue(":a",$nome_E);
            $stmt->bindValue(":b",$segundo_E);
            $stmt->bindValue(":c",$apelido_E);
            $stmt->bindValue(":d",$parentesco_E);
            $stmt->bindValue(":e",$contacto1_E);
            $stmt->bindValue(":f",$contacto2_E);
            $stmt->bindValue(":g",$bairro_E);
            $stmt->bindValue(":h",$avenida_E);
            $stmt->bindValue(":i",$id_bolseiro);
            $stmt->execute();
            return true;
        }

    }





?>
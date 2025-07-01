<?php
        require_once '../connection/connection.php';
       

        class Bolseiro{
          
        public function cadastrarBolseiroCompleto($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $codigo, $saida_B){
            global $connection;


            //Essas linhas preparam e executam uma consulta para verificar se já existe um registro na tabela "bolseiro" com o mesmo BI e NUIT informados. Se a consulta retornar algum resultado, o método retorna "false" para indicar que o bolseiro já está cadastrado. Caso contrário, o código continua para cadastrar o novo bolseiro.
            $stmt = $connection->prepare("SELECT nome FROM bolseiro WHERE bi = :bi AND nuit = :nuit");
            $stmt->bindValue(":bi", $bi_B);
            $stmt->bindValue(":nuit", $nuit_B);
            $stmt->execute();
            if($stmt->rowCount() > 0){

                return false;
            }else{ // nao cadastrado

                //Essas linhas preparam e executam uma consulta para inserir um novo registro na tabela "bolseiro" com os valores fornecidos. Em seguida, a consulta é executada e o método retorna "true" para indicar que o bolseiro foi cadastrado com sucesso.
                $stmt = $connection->prepare("INSERT INTO bolseiro (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, bi, nuit, sexo, orfao, contacto1, contacto2, ano_ingresso, codigo_estudante, email, ano_saida, id_bolsa, id_curso)
                VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m, :n, :o, :p, :q, :r);");
                $stmt->bindValue(":a",$nome_B);
                $stmt->bindValue(":b",$segundo_B);
                $stmt->bindValue(":c",$apelido_B);
                $stmt->bindValue(":d",$data_B);
                $stmt->bindValue(":e",$provincia_B);
                $stmt->bindValue(":f",$distrito_B);
                $stmt->bindValue(":g",$bi_B);
                $stmt->bindValue(":h",$nuit_B);
                $stmt->bindValue(":i",$genero_B);
                $stmt->bindValue(":j",$orfao_B);
                $stmt->bindValue(":k",$contacto1_B);
                $stmt->bindValue(":l",$contacto2_B);
                $stmt->bindValue(":m",$ingresso_B);
                $stmt->bindValue(":n",$codigo);
                $stmt->bindValue(":o",$email_B);
                $stmt->bindValue(":p","$saida_B");
                $stmt->bindValue(":q","1");
                $stmt->bindValue(":r",$curso);
                $stmt->execute();
                return true;

            }

        }

        
        public function cadastrarBolseiroParcial($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $saida_B, $codigo){
                global $connection;

            //Essas linhas preparam e executam uma consulta para verificar se já existe um registro na tabela "bolseiro" com o mesmo BI e NUIT informados. Se a consulta retornar algum resultado, o método retorna "false" para indicar que o bolseiro já está cadastrado. Caso contrário, o código continua para cadastrar o novo bolseiro.    
            $stmt = $connection->prepare("SELECT primeiro_nome FROM bolseiro WHERE bi = :bi");
            $stmt->bindValue(":bi", $bi_B);          
            $stmt->execute();
            if($stmt->rowCount() > 0){

                return false;
            }else{ // nao cadastrado

                  //Essas linhas preparam e executam uma consulta para inserir um novo registro na tabela "bolseiro" com os valores fornecidos. Em seguida, a consulta é executada e o método retorna "true" para indicar que o bolseiro foi cadastrado com sucesso.
                $stmt = $connection->prepare("INSERT INTO bolseiro (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, bi, nuit, sexo, orfao, contacto1, contacto2, ano_ingresso, codigo_estudante, email, ano_saida, id_bolsa, id_curso)
                VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m, :n, :o, :p, :q, :r)");
                $stmt->bindValue(":a",$nome_B);
                $stmt->bindValue(":b",$segundo_B);
                $stmt->bindValue(":c",$apelido_B);
                $stmt->bindValue(":d",$data_B);
                $stmt->bindValue(":e",$provincia_B);
                $stmt->bindValue(":f",$distrito_B);
                $stmt->bindValue(":g",$bi_B);
                $stmt->bindValue(":h",$nuit_B);
                $stmt->bindValue(":i",$genero_B);
                $stmt->bindValue(":j",$orfao_B);
                $stmt->bindValue(":k",$contacto1_B);
                $stmt->bindValue(":l",$contacto2_B);
                $stmt->bindValue(":m",$ingresso_B);
                $stmt->bindValue(":n",$codigo);
                $stmt->bindValue(":o",$email_B);
                $stmt->bindValue(":p","$saida_B");
                $stmt->bindValue(":q","2");
                $stmt->bindValue(":r",$curso);
                $stmt->execute();
                return true;
            }

        }
     

        public function cadastrarEstadoSaude($restricao, $doenca ,$observacao, $id_bolseiro){
            global  $connection;

            $stmt = $connection->prepare("INSERT INTO estado_saude(id_bolseiro, restricao_alimentar, doenca_cronica, observacao)
            VALUES(:a, :b, :c, :d);");
            $stmt->bindValue(":a",$id_bolseiro);
            $stmt->bindValue(":b",$restricao);
            $stmt->bindValue(":c",$doenca);
            $stmt->bindValue(":d",$observacao);
            $stmt->execute();
            return true;
        }

        public function cadastrarAlocacao($andar, $quarto, $id_bolseiro){
            global  $connection;

            $stmt = $connection->prepare("INSERT INTO alocacao(andar, quarto, id_bolseiro) 
            VALUES(:a, :b, :c);");
            $stmt->bindValue(":a",$andar);
            $stmt->bindValue(":b",$quarto);
            $stmt->bindValue(":c",$id_bolseiro);
            $stmt->execute();

        } 

    
    }

?>
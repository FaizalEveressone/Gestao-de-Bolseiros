<?php
require_once "Bolseiro.php";
require_once "./connection/connection.php";


    $b = new Bolseiro();
    $e = new Escolar();
    $f = new Familiares();
    

session_start();

        $curso_n = addslashes($_POST['curso']);
        
        $cmd = $conexao->prepare("SELECT id FROM curso WHERE nome = :curso");
        $cmd->bindValue(":curso",$curso_n);
        $cmd->execute();
 
        $curso = $cmd->fetch(PDO::FETCH_ASSOC); //Uma unica linha 

        if(isset($_POST['nome_B'])){
            
            $nome_B = addslashes($_POST['nome_B']);
            $segundo_B = addslashes($_POST['segundo_B']); 
            $apelido_B = addslashes($_POST['apelido_B']);
            $data_B = addslashes($_POST['data_B']);
            $bi_B = addslashes($_POST['bi_aB']);
            $nuit_B = addslashes($_POST['nuit_B']);
            $curso;
            $genero_B = addslashes($_POST['genero_B']);
            $provincia_B = addslashes($_POST['provincia_B']);
            $distrito_B = addslashes($_POST['distrito_B']);
            $contacto1_B = addslashes($_POST['contacto1_B']);
            $contacto2_B = addslashes($_POST['contacto2_B']);
            $email_B = addslashes($_POST['email_B']);
            $ingresso_B = addslashes($_POST['ingresso_B']);
            $orfao_B = addslashes($_POST['orfao_B']);
            $codigo = addslashes($_POST['codigo']);

            if(!empty($curso) && !empty($nome_B) && !empty($segundo_B) && !empty($apelido_B) && !empty($data_B) && !empty($bi_B) && !empty($genero_B) && !empty($provincia_B) && !empty($distrito_B) && !empty($contacto1_B) && !empty($contacto2_B) && !empty($email_B) && !empty($ingresso_B) && !empty($saida_B) && !empty($codigo)){
                $b->cadastrarBolseiroCompleto($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $codigo, $saida_B);
            }
        }

        if(isset($_POST['nome_P'])){
            $nome_P = addslashes($_POST['nome_P']); 
            $segundo_P = addslashes($_POST['segundo_P']); 
            $apelido_P = addslashes($_POST['apelido_P']); 
            $data_P = addslashes($_POST['data_P']); 
            $profissao_P = addslashes($_POST['profissao_P']); 
            $patronal_P = addslashes($_POST['patronal_P']); 
            $provincia_P = addslashes($_POST['provincia_P']); 
            $distrito_P = addslashes($_POST['distrito_P']); 
            $bairro_P = addslashes($_POST['bairro_P']); 
            $contacto1_P = addslashes($_POST['contacto1_P']); 
            $contacto2_P = addslashes($_POST['contacto2_P']); 
            
            if(!empty($nome_P) && !empty($segundo_P) && !empty($apelido_P) && !empty($data_P) && !empty($profissao_P) && !empty($patronal_P) && !empty($provincia_P) && !empty($distrito_P) && !empty($bairro_P) && !empty($contacto1_P) && !empty($contacto2_P)){
                $f->cadastrarPai($nome_P, $segundo_P, $apelido_P, $data_P, $profissao_P, $patronal_P, $provincia_P, $distrito_P, $bairro_P, $contacto1_P, $contacto2_P, $id_bolseiro);
            }

        }

        if(isset($_POST['nome_M'])){
            $nome_M = addslashes($_POST['nome_M']); 
            $segundo_M = addslashes($_POST['segundo_M']); 
            $apelido_M = addslashes($_POST['apelido_M']); 
            $data_M = addslashes($_POST['data_M']); 
            $profissao_M = addslashes($_POST['profissao_M']); 
            $patronal_M = addslashes($_POST['patronal_M']); 
            $provincia_M = addslashes($_POST['provincia_M']); 
            $distrito_M = addslashes($_POST['distrito_M']); 
            $bairro_M = addslashes($_POST['bairro_M']); 
            $contacto1_M = addslashes($_POST['contacto1_M']); 
            $contacto2_M = addslashes($_POST['contacto2_M']); 
            
            if(!empty($nome_M) && !empty($segundo_M) && !empty($apelido_M) && !empty($data_M) && !empty($profissao_M) && !empty($patronal_M) && !empty($provincia_M) && !empty($distrito_M) && !empty($bairro_M) && !empty($contacto1_M) && !empty($contacto2_M)){
                $f->cadastrarPai($nome_M, $segundo_M, $apelido_M, $data_M, $profissao_M, $patronal_M, $provincia_M, $distrito_M, $bairro_M, $contacto1_M, $contacto2_M, $id_bolseiro);
            }

        }

        if(isset($_POST['nome_E'])){
            $nome_E = addslashes($_POST['nome_E']); 
            $segundo_E = addslashes($_POST['segundo_E']); 
            $apelido_E = addslashes($_POST['apelido_E']); 
            $parentesco = addslashes($_POST['parentesco_E']); 
            $bairro_E = addslashes($_POST['bairro_E']); 
            $avenida_E = addslashes($_POST['avenida_E']); 
            $contacto1_E = addslashes($_POST['contacto1_E']); 
            $contacto2_E = addslashes($_POST['contacto2_E']); 
            
            if(!empty($nome_E) && !empty($segundo_E) && !empty($apelido_E) && !empty($parentesco_E) && !empty($bairro_E) && !empty($avenida_E) && !empty($contacto1_E) && !empty($contacto2_E)){
                $f->cadastrarEmergencia($nome_E, $segundo_E, $apelido_E, $parentesco_E, $bairro_E, $avenida_E, $contacto1_E, $contacto2_E, $id_bolseiro);
            }

        }

        if(isset($_POST['medio'])){
            $medio = addslashes($_POST['medio']);
            $escola = addslashes($_POST['escola']);
            $provincia = addslashes($_POST['provincia']);
            $distrito = addslashes($_POST['distrito']);
            if(!empty($medio) && !empty($escola) && !empty($provincia) && !empty($distrito)){
                $e->cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro);
            }
        }


?> 


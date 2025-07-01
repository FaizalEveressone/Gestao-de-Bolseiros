<?php
    require_once "Bolseiro.php";
    require_once "../connection/connection.php";


    $b = new Bolseiro();
  
    

        if(isset($_POST['cadastrar'])){

            $curso = addslashes($_POST['curso']);
            $nome_B = addslashes($_POST['nome_B']);
            $segundo_B = addslashes($_POST['segundo_B']); 
            $apelido_B = addslashes($_POST['apelido_B']);
            $data_B = addslashes($_POST['data_B']);
            $bi_B = addslashes($_POST['bi_B']);
            $genero_B = addslashes($_POST['genero_B']);
            $provincia_B = addslashes($_POST['provincia_B']);
            $distrito_B = addslashes($_POST['distrito_B']);
            $contacto1_B = addslashes($_POST['contacto1_B']);
            $contacto2_B = addslashes($_POST['contacto2_B']);
            $orfao_B = addslashes($_POST['orfao_B']);
            $nuit_B = addslashes($_POST['nuit_B']);
            $email_B = addslashes($_POST['email_B']);
            $ingresso_B = addslashes($_POST['ingresso_B']);
            $saida_B = addslashes($_POST['saida_B']);
            $codigo = addslashes($_POST['codigo']);
            $curso = addslashes($_POST['curso']);

            $b->cadastrarBolseiroParcial($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $saida_B, $codigo);        
            
         }      


        header("Location: parcial_continuacao.php");
       
?>
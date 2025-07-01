<?php 
    require_once '../connection/connection.php';
    require_once 'Usuario.php'; 


        $n = new Usuario(); 
      

        $utilizador = addslashes($_POST['utilizador']);
        $senha = addslashes($_POST['senha']);
      
        if($n->login($utilizador, $senha) == true){
            header("Location: ../../client/pages/pagina-inicial/");
        } else{
           header("location: ../../");
        }
?>
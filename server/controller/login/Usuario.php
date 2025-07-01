<?php
    require_once '../../connection/connection.php';
    session_start();

     class Usuario{

        public function login($utilizador , $senha){
            global $connection;

            $sql = $connection->prepare("SELECT * FROM usuario WHERE utilizador = :utilizador"); 
            $sql-> bindValue(":utilizador", $utilizador);
            $sql->execute();


            if($sql->rowCount() > 0){
                $resultado = $sql->fetch(PDO::FETCH_ASSOC);

                if($resultado["senha"] == md5($senha)) {
                    $_SESSION["user-data"] = $resultado;
                    return true;
                } else {
                    $_SESSION["auth"] = "Senha invalida";
                    header("Location: ../../../index.php");
                return false;
                }
                
            } else {
                $_SESSION["auth"] = "Usuario nao encontrado";
                header("Location: ../../../index.php");
                return false;
            }
        } 
     }

?>
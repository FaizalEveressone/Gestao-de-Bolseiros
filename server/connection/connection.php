


<?php 

/**
 * Instancia conexao com Mysql Database
 */

 define("HOST", "localhost");
 define("DBNAME", "bolseiros");
 define("USER", "root");
 define("PASSWORD", "");

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
} 
catch (PDOException $m) {
    echo $m->getMessage();    
} 
catch (Exception $m) {
    echo "Erro generico" .$m->getMessage();
    exit();
}

?>
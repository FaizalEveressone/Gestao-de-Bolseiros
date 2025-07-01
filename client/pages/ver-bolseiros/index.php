<?php

// Declare the perPage variable outside of the PHP block
$perPage = 10; // Number of bolseiros per page

// Declare the page variable outside of the PHP block
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

require_once "../../../server/connection/connection.php";

// Start the PHP block
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver bolseiro</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
</head>

<body class="h-[calc(100vh-80px)] overflow-hidden">
    <header>
        <?php
        include "../componentes/header.php";
        ?>
    </header>
    <aside>
        <?php
        include "../componentes/aside.php";
        ?>
    </aside>

    <main class="clear-right flex flex-col h-[calc(100vh-80px)] overflow-scroll">
        <div class="flex justify-center mt-8 mx-10 ml-80">
            <input type="text" placeholder="Nome do Bolseiro" class=" bg-gray-300 w-56 placeholder:text-black text-left p-2 px-4">
            <button class="bg-[#044865] text-center text-white w-32 ml-2 font-medium"> Pesquisar</button>
        </div>


        <div>
            <table class=" table-auto block justify-center mt-25">
                <thead>
                        <tr>
                            <th >Nome</th>
                            <th>Ac&ccedil;&otilde;es</th>
                        </tr>
                </thead>

                <?php 

                    // Validate and handle page input
                    if ($page < 1) {
                        $page = 1;
                    } elseif ($page > ceil($totalBolseiros / $perPage)) {
                        $page = ceil($totalBolseiros / $perPage);
                    }

                     // Calculate total pages
                     $totalBolseiros = $stmt->rowCount();
                     $totalPages = ceil($totalBolseiros / $perPage); 
                    
                    // Fetch bolseiros with pagination
                    $offset = ($page - 1) * $perPage;
                    $stmt = $connection->query("SELECT * FROM bolseiro LIMIT $offset, $perPage");
                    $stmt->execute();
                    // $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                             
                    foreach ($resultado as $bolseiro) {
                ?>
                        
                <tbody>
                    <tr>                        
                        <td class="bg-[#F2F4F9] text-lg w-96 h-10 px-4 py-1">
                            <?php echo $bolseiro['primeiro_nome'];?> <?php echo $bolseiro['apelido'];?>
                        </td>

                        <td>
                            <a href="editar.php?id=<?php echo $bolseiro['id'];?>" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Editar</a>
                            <a href="../perfil/?php echo $bolseiro['id'];?>" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Ver</a>
                        </td>

                    </tr>                    

                    <?php  }  
                            // Display pagination controls
                            if ($totalPages > 1) {
                                echo "<ul class='pagination'>";
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    $activeClass = ($i == $page) ? "active" : "";
                                    echo "<li><a href='?page=$i' class='$activeClass'>$i</a></li>";
                                }
                                echo "</ul>";
                            }

                    ?>
                </tbody>
            </table>
        </div>
       
    </main>
</

<?php
    require_once "../../../server/connection/connection.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório - Gestão de Bolseiros</title>
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
       
       <div class="flex justify-center mt-8 mx-10 ml-[550px]">
            <input type="text" placeholder="Bolseiro completo" class=" bg-gray-300 w-72 placeholder:text-black text-left p-2 px-4">
            <button class="bg-[#044865] text-center text-white w-32 ml-2 font-medium"> Pesquisar</button>
        </div>

                <!-- tabela -->
         <table class="table-auto border-collapse border border-slate-400 mt-20 w-[900px] ml-28">
            <thead>
               <tr class="bg-[#044865] ">
                  <th class= "  text-base text-white py-1 ">Nome</th>
                   <th class="  text-base text-white py-1 ">Sexo</th>
                   <th class="  text-base text-white py-1 ">Provincia</th>
                   <th class="  text-base text-white py-1 ">Curso</th>
                   <th class="  text-base text-white py-1 ">Bolsa</th>
                </tr>
            </thead>
                <?php 
                        $stmt = $connection->query("SELECT * FROM bolseiro, bolsa, curso where bolsa.id = id_bolsa and curso.id = id_curso;");
                        $stmt->execute();
                        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);        
                        foreach ($resultado as $bolseiro) {
                ?>
            <tbody>
             <tr class="bg-gray-200">
               <td class="border  border-black py-2 text-base text-center px-2">
               <?php echo $bolseiro['primeiro_nome'];?> <?php echo $bolseiro['segundo_nome'];?> <?php echo $bolseiro['apelido'];?>
               </td> 
               <td class="border border-black py-2 text-base text-center ">
                     <?php echo $bolseiro['sexo'];?>
               </td> 
               <td class="border border-black py-2 text-base text-center ">
                    <?php echo $bolseiro['provincia'];?> <?php echo" - ";?> <?php echo $bolseiro['distrito'];?>
               </td> 
               <td class="border border-black py-2 text-base text-center ">
                    <?php echo $bolseiro['nome'];?>
               </td> 
               <td class="border border-black py-2 text-base text-center ">
                    <?php echo $bolseiro['tipo'];?>
               </td> 
            </tr>
            <?php } ?>
         </tbody>
    </table> 



       <!-- <div class="flex justify-evenly mt-28 ml-4">
            <a href="#" class="bg-[#044865] text-center text-white font-medium py-2 px-2 w-[170px] rounded-lg">Regulamento</a>
            <a href="./../ver-notas/index.php" class="bg-[#044865] text-center text-white font-medium py-2 px-2 w-[170px] rounded-lg">Aproveitamento</a>
            <a href="./../perfil/index.php" class="bg-[#044865] text-center text-white font-medium py-2 px-2 w-[170px] rounded-lg">Relat&oacute;rio Semestral</a>
            <a href="./../sansao/index.php" class="bg-[#044865] text-center text-white font-medium py-2 px-2 w-[170px] rounded-lg">Imprimir</a>
        </div> -->
    
         <div class="flex justify-end">
             <button class="bg-[#044865] text-white py-2 px-4 w-[150px] rounded-lg font-medium mt-28 mr-[70px] ">Imprimir</button>
        </div> 

    </main>
</body>
</html>
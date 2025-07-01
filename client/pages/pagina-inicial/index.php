<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Gestão de Bolsas</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
</head>
<body>
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
    <main>
        <div class="mt-12 flex justify-center text-white font-bold ">
            <a href="../../../server/controller/Regulamento de Bolsa/"> <div class="bg-[#D9D9D9] h-52 mr-16  font-semibold text-2xl w-72 flex items-center px-4">Regulamento da Bolsa</div> </a>
           
            <a href="../../../server/controller/Regulamento da Residencia/"> <div class="bg-[#D9D9D9] h-52 font-semibold text-2xl w-72 flex items-center text-center px-4">Regulamento da Resid&ecirc;ncia</div> </a>
            
           
        </div>
    </main>
</body>
</html>
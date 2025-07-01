<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver notas</title>
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

    <main class="clear-right flex flex-col justify-center">
        
        <div class="flex justify-start ml-28 mt-8"> 

            <p class="font-bold">XXXXX-</p>
            <p>Gedia Genifa Lucas Jangamo</p>

        </div>

           <div class="flex ml-28 mt-14 ">

               <div class="mr-16">
                    <label class="font-bold text-lg mr-2">Ano</label>
                    <select name="ano" class="bg-[#d3dcf5]  outline-none w-24 h-8">">
                        <option value="ano">2020</option>
                        <option value="ano">2021</option>
                        <option value="ano">2022</option>
                        <option value="ano">2023</option>

                    </select>
               </div>

               <div class="mr-16">
                    <label class="font-bold text-lg mr-2">Curso</label>
                    <select name="semestre" size="" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center">
                        <option value="curso">Rela&ccedil;&otilde;es Internacionais e Diplomacia</option>
                        <option value="curso">Administra&ccedil;&atilde;o Publica</option>
                        <option value="curso">Engenharia em Tecnologias e Sistemas de informa&ccedil;&atilde;o</option>
                    </select>
               </div>

               <div class="mr-16">
                    <label class="font-bold text-lg mr-2">Semestre</label>
                    <select name="semestre" class="bg-[#d3dcf5]  outline-non w-24 h-8 text-center">">
                        <option value="semestre">1</option>
                        <option value="semestre">2</option>
                    </select>
               </div>
           </div>
        
        </div>
        
        <div class="flex justify-start ml-28 mt-14">
            <div class="flex flex-col">
                <label class="font-bold text-lg text-left py-3">Cadeiras</label>
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                <input type="text" name="cadeira" class="w-[500px]  h-8 text-center mb-2 bg-[#d3dcf5]  outline-none">
                
            </div>

            <div class="flex flex-col ml-8">
                <label class="font-bold text-lg text-left py-3">Notas</label>
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#d3dcf5]  outline-none w-24 h-8 text-center mb-2">
            </div>
        </div>

        <div class="flex justify-center ">
        <a href="./../perfil/index.php" class="bg-[#044865] text-white py-2 px-4 w-[150px] rounded-lg font-medium mt-5 ml-[250px] text-center">Guardar</a>
        </div>
       
    </main>
</body>
</html>
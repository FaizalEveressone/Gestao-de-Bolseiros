<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sansao</title>
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

            <div class="flex justify-start ml-28 mt-14">
            <div class="flex flex-col">
                <label class="font-bold text-lg text-left py-3 mb-2">Infra&ccedil;&atilde;o</label>
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                <input type="text" name="infracao" class="bg-[#d3dcf5] w-[630px] h-8 text-center mb-2 outline-none">
                
            </div>

            <div class="flex flex-col ml-7 ">
                <label class="font-bold text-lg text-left py-3 mb-2">San&ccedil;&atilde;o</label>
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                <input type="text" name="status" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
            </div>

            <div class="flex flex-col ml-7 ">
                <label class="font-bold text-lg text-left py-3 mb-2">Status</label>
                <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>

               <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>

                 <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
                 </div>

                <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>
               <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>
               <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>
               <div >
                    <select name="semestre" class="bg-[#d3dcf5] w-32 h-8 text-center mb-2 outline-none">
                        <option value="semestre">Pendente</option>
                        <option value="semestre">Resolvido</option>
                    </select>
               </div>
                
            </div>
        </div> 




        <div class="flex justify-end">
            <a href="./../perfil/index.php" class="bg-[#044865] text-white py-2 px-4 w-[150px] rounded-lg font-medium mt-8 mr-[40px] text-center">Guardar</a>

        </div>
    </main>
</body>
</html>
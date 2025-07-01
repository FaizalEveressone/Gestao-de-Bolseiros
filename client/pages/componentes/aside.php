<?php
    session_start();

?>

<div class="bg-[#22A5DB] mt-0 w-1/5 h-[calc(100vh-80px)] border-t-2 border-white float-left"  id="aside">

    <div class=" flex flex-col justify-center items-center py-6 ">
     <img src="./../../assets/img/user.png" alt="userimage " class="h-20">
     <p class="font-bold text-white mt-3 text-xl"><?php echo $_SESSION["user-data"]["utilizador"]; ?></p>
    </div>

    <div class="text-white flex flex-col text-center font-bold">
        <a href="../pagina-inicial/" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7]">Página inicial</a>
        <a href="../cadastrar-bolsa-completa/" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7] ">Cadastrar Bolsa Completa</a>
        <a href="../cadastrar-bolsa-parcial/" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7] ">Cadastrar Bolsa Parcial</a>
        <a href="../ver-bolseiros/" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7]">Ver Bolseiros</a>
        <a href="../relatorio/" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7]">Relatório</a>
        <a href="../../../" class="bg-[#044865] mt-1 p-2 hover:bg-[#078DB7]">Sair</a>
    </div>
</div>
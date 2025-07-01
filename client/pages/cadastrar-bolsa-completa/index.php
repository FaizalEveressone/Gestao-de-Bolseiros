<?php 
    require"../../../server/connection/connection.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Bolsa Completa - Gestão de Bolseiros</title>
    <link rel="stylesheet" href="../../assets/styles/output.css">
    <script src="../../assets/scripts/js/jquery-3.6.1.js"></script>
    <style>
        #aside {
            height: calc(100vh + 90px);
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#parte-2").hide();
            $("#parte-1").show();
            $("#proximo").click(function() {
                $("#parte-2").toggle();
                $("#parte-1").toggle();
            });
            $("#anterior").click(function() {
                $("#parte-2").toggle();
                $("#parte-1").toggle();
            });
        });
    </script>
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
    <main class=" float-right w-4/5 mt-0 h-[calc(100vh-80px)] overflow-scroll">
        <h1 class=" w-1/3 m-auto font-bold mt-10 mb-10 text-2xl text-[#044865]">
            Cadastro de Bolsa Completa
        </h1>
        <form action=""  class="w-[93%] ml-24">
            <fieldset id="parte-1">
                <div>
                    <div class="w-24 min-h-24  p-6 text-center bg-gray-300 float-left border-solid border-gray-300 border-2">
                        <h1 class="font-semibold">Foto</h1>
                    </div>
                    <h1 class=" w-1/3 m-auto font-bold text-xl text-[#044865]">
                        Dados do Bolseiro
                    </h1>
                </div>
                <table class="clear-both relative top-4">
                    <tbody>
                        <tr>
                            <td class="p-1" colspan="2">
                                <label for="code" class="font-semibold">Código de estudante</label>
                                <input type="number" name="codigo" maxlength="7" class="bg-gray-300 focus:outline-none rounded-sm" required>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Curso</label>
                                <select name="Curso">
                                    <option>AP</option>
                                    <option>ETSI</option>
                                    <option>RID</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_B" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_B"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_B"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="date" class="font-semibold">Data de nascimento</label>
                                <input type="date" name="data_B" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="id" class="font-semibold">B.I</label>
                                <input type="number" name="bi_B"  maxlength="13" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="id" class="font-semibold">Nuit</label>
                                <input type="number" name="nuit"  maxlength="9" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_B" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_B" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Sexo</label>
                                <select name="genero_B" class="bg-gray-300 focus:outline-none w-1/2" required>
                                    <option value="female">Feminino</option>
                                    <option value="male">Masculino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto1_B" size="20" maxlength="11" class="bg-gray-300 focus:outline-none" required>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none" >
                                <input type="text" name="contacto2_B" maxlength="11" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="p-1">
                                <label for="email" class="font-semibold">Email</label>
                                <input type="text" name="email_B" size="70" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="2">
                                <label for="entry-year" class="font-semibold">Ano de ingresso</label>
                                <input type="date" name="ingresso_B" class="bg-gray-300 focus:outline-none" required>
                                <label for="exit-year" class="font-semibold">Ano de saída</label>
                                <input type="date" name="saida_B" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Orf&atilde;o</label>
                                <select name="orfao_B" class="bg-gray-300 focus:outline-none w-1/2" required>
                                    <option value="">N&atilde;o</option>
                                    <option value="">Pai</option>
                                    <option value="">M&atilde;e</option>
                                    <option value="">Ambos</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Dados do Pai
                </h1>
                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_P"  class="bg-gray-300 focus:outline-none" >
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_P"  class="bg-gray-300 focus:outline-none" >
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Data Nascimento</label>
                                <input type="date" name="data_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Profissao</label>
                                <input type="text" name="profissao_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Entidade Patronal</label>
                                <input type="text" name="patronal_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                        </tr>  
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_P" class="bg-gray-300 focus:outline-none" >
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_P" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" >
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_P" maxlength="11" class="bg-gray-300 focus:outline-none" >
                            </td>
                        </tr>
                       
                    </tbody>
                </table>


                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Dados da M&atilde;e
                </h1>
                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_M"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_M"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Data Nascimento</label>
                                <input type="date" name="data_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Profissao</label>
                                <input type="text" name="profissao_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Entidade Patronal</label>
                                <input type="text" name="patronal_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_M" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_M" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" required>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_M" maxlength="11" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>

                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Contacto de Emergência
                </h1>
                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_E" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_E"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_E"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Grau de parentesco</label>
                                <input type="text" name="parentesco_E" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_E" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Avenida</label>
                                <input type="text" name="avenida_E" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_E" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" required>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_E" maxlength="11" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>

                        <tr> 
                            <td>
                            </td>
                            <td>
                            </td>
                            <td class="flex justify-end" class="p-3">
                                <input type="button" id="proximo" value="Proximo" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </fieldset>
            <fieldset id="parte-2">

                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Situação Escolar
                </h1>

                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Ano de conclusão do nivel medio</label>
                                <input type="date" name="medio" size="10" class="bg-gray-300 focus:outline-none">
                            </td>
                        </tr>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Escola</label>
                                <input type="text" name="escola" size="50" class="bg-gray-300 focus:outline-none">
                            </td>
                        </tr>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Provincia</label>
                                <input type="text" name="provincia" class="bg-gray-300 focus:outline-none">
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito" class="bg-gray-300 focus:outline-none">
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Estado de saúde
                </h1>

                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Restricao alimentar</label>
                                <input type="text" name="restricao" size="10" class="bg-gray-300 focus:outline-none">
                            </td>
                        </tr>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Doenca cronica</label>
                                <input type="text" name="doenca" size="50" class="bg-gray-300 focus:outline-none">
                            </td>
                        </tr>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Observacao</label>
                                <input type="text" name="observacao" class="bg-gray-300 focus:outline-none">
                            </td>
        
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                
                <h1 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Alocação
                </h1>
                <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td class="p-1">
                                <label for="name" class="font-semibold">Andar</label>
                                <input type="text" name="andar" size="25" class="bg-gray-300 focus:outline-none">
                            </td>
                            <td class="flex justify-end ">
                                <label for="name" class="font-semibold mx-2">Quarto</label>
                                <input type="text" name="quarto" size="25" class="bg-gray-300 focus:outline-none">
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1 flex gap-8">
                                <label for="name" class="font-semibold">kit</label>
                                    <label for="cama">Cama</label><br>                              
                                    <input type="checkbox" value="cama" name="cama" size="20" class="bg-gray-300 focus:outline-none">
                                    <label for="lencol">Lencol</label> <br> 
                                    <input type="checkbox" value="lencol" name="lencol" size="4" class="bg-gray-300 focus:outline-none">
                                    <label for="almofada">Almofada</label> <br> 
                                    <input type="checkbox" value="almofada" name="almofoda" size="20" class="bg-gray-300 focus:outline-none">
                                    <label for="fronha">Fronha</label>  <br>
                                    <input type="checkbox" value="fronha" name="fronha" size="4" class="bg-gray-300 focus:outline-none">
                                    <label for="cobertor">Cobertor</label>  
                                    <input type="checkbox" value="cobertor" name="cobertor"  size="20" class="bg-gray-300 focus:outline-none">
                                    
                            </td>
                        <tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="button" id="anterior" value="Anterior" class="bg-[#044865] text-center text-white font-medium py-2 px-4 mx-4 w-[200px] rounded-lg">
                <input type="submit" value="Cadastrar" onclick="testar" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">
            </fieldset>
        </form>
    </main>
</body>

</html>





<?php
    require_once "../../../server/connection/connection.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Bolsa parcial - Gestão de Bolseiros</title>
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

    
    <main class=" float-right w-4/5 mt-8 h-[calc(100vh-80px)] overflow-scroll">
        <h1 class=" w-1/3 m-auto font-bold mt-10 mb-10 text-2xl text-[#044865]">
            Cadastro de Bolsa Parcial
        </h1>
        <form action="../../../server/controller/parcial.php" method="POST" class="w-[93%] ml-24">
            <div>
                <!-- <div class="w-24 min-h-24  p-6 text-center bg-gray-300 float-left border-solid border-gray-300 border-2">
                    <h1 class="font-semibold"></h1>
                </div> -->
                <h2 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Dados do Bolseiro
                </h2>
            </div>
            <table class="clear-both relative top-4">
                    <tbody>
                        <tr>
                            <td class="p-1" colspan="2">
                                <label for="code" class="font-semibold">Código de estudante</label>
                                <input type="number" maxlength="7" name="codigo" class="bg-gray-300 focus:outline-none rounded-sm" requirede>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Curso</label>
                                <select name="curso" class="bg-gray-300 focus:outline-none w-1/2" requirede>
                                    <option value="">Selecione o curso</option>
                                <?php
                                        $stmt = $connection->query("SELECT * FROM curso ORDER BY nome ASC");
                                        $stmt->execute();
                                        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach($resultado as $option){
                                            ?>
                                                <option value="<?php echo $option['id']?>"><?php echo $option['nome']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>   
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_B"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_B"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="ate" class="font-semibold">Data de nascimento</label>
                                <input type="date" name="data_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="id" class="font-semibold">BI</label>
                                <input type="text" name="bi_B" maxlength="13" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="id" class="font-semibold">Nuit</label>
                                <input type="number" name="nuit_B"  maxlength="9" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Sexo</label>
                                <select name="genero_B" class="bg-gray-300 focus:outline-none w-1/2" required>
                                    <option >Selecione o genero</option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto1_B" maxlength="9" size="20" class="bg-gray-300 focus:outline-none" requirede>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto2_B" maxlength="9" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="p-1">
                                <label for="email" class="font-semibold">Email</label>
                                <input type="text" name="email_B" size="70" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="entry-year" class="font-semibold">Ano de ingresso</label>
                                <input type="date" name="ingresso_B" class="bg-gray-300 focus:outline-none" required>
                                <label for="exit-year" class="font-semibold">Ano de saída</label>
                                <input type="date" name="saida_B" class="bg-gray-300 focus:outline-none" required>

                                <label for="course" class="font-semibold">Orf&atilde;o</label>
                                <select name="orfao_B"  class="bg-gray-300 focus:outline-none "  required>
                                    <option value="nao">N&atilde;o</option>
                                    <option value="pai">Pai</option>
                                    <option value="mae">M&atilde;e</option>
                                    <option value="ambos">Ambos</option>
                                </select>
                            </td>
                          
                        </tr>
                    </tbody>
            </table>
                <!-- <h2 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Dados do Pai
                </h2>
            <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_P"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_P"  class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Data Nascimento</label>
                                <input type="date" name="data_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Profissao</label>
                                <input type="text" name="profissao_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Entidade Patronal</label>
                                <input type="text" name="patronal_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_P" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto1_P" maxlength="9" size="20" class="bg-gray-300 focus:outline-none" required>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto2_P" maxlength="9" class="bg-gray-300 focus:outline-none" required>
                            </td>
                        </tr>
                       
                    </tbody>
            </table>


                <h2 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Dados da M&atilde;e
                </h2>
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
                                <input type="date" name="data_mae" class="bg-gray-300 focus:outline-none" required>
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
                <h2 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Contacto de Emergencia
                </h2>
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
                    </tbody>    
            </table>  -->
                <h2 class=" w-1/3 m-auto mt-10 font-bold text-xl text-[#044865]">
                    Situacao Escolar
                </h2>
            <table class="relative top-4">
                    <tbody>   
                    <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Ano de conclusao do nivel medio</label>
                                <input type="date" name="medio" size="10" class="bg-gray-300 focus:outline-none" required>
                            </td>
                    </tr>
                    <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Escola</label>
                                <input type="text" name="escola" size="50" class="bg-gray-300 focus:outline-none" required>
                            </td>
                    </tr>
                    <tr>                    
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Provincia</label>
                                <input type="text" name="provincia" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito" class="bg-gray-300 focus:outline-none" required>
                            </td>
                            <td></td>
                    </tr>   

                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td class="flex justify-end" class="p-3">
                                <input type="submit" value="Cadastrar" name="cadastrar" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">
                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table> 
        </form>
    </main>
</body>

</html>
>
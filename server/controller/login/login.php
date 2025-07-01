<?php 

    //inclui o arquivo "Usuario.php" usando o require_once, permitindo que a classe Usuario seja utilizada neste código.
    require_once 'Usuario.php'; 

        //Na quarta linha, uma nova instância da classe Usuario é criada e atribuída à variável $n
        $n = new Usuario(); 
      
        //Nas linhas as seguir os valores dos campos "utilizador" e "senha" são obtidos a partir do array $_POST e armazenados nas variáveis $utilizador e $senha, respectivamente, a função addslashes() é utilizada para escapar caracteres especiais nessas strings.
        $utilizador = addslashes($_POST['utilizador']);
        $senha = addslashes($_POST['senha']);
      
        //é feita uma verificação de login chamando o método login() da instância $n da classe Usuario passando os parâmetros $utilizador e $senha. Se o retorno for true, significa que o login foi bem-sucedido.
        if($n->login($utilizador, $senha) == true){
            
            //é utilizado o header() para redirecionar o usuário para a página inicial do cliente, especificada no caminho "../../../client/pages/pagina-inicial/".

            header("Location: ../../../client/pages/pagina-inicial/");
        } else{
           echo "Falha no Login";
           //é utilizado o header() novamente para redirecionar o usuário para a página de login  especificada no caminho "../../../index.php".
           header("Location: ../../");
        }
?>
<?=session_start();?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CHALLENGE</title>
    <link rel="stylesheet" href="./css/style-index.css">
</head>

<body>
    <ul>
        <li data-text="Login"><a <?php 
                                    if($_SESSION['usuario']){
                                        echo (''); 
                                    } else { echo ('class="red" ');; } 
                                    ?>href="./autenticacao/telaLogin.php"><p>Login</p></a></li>

        <li data-text="Sobre"><a href="./sobre.html">Sobre</a></li>
        <li data-text="Clientes"><a href="./clientes/clientes.php">Clientes</a></li>
        <li data-text="Produtos"><a href="./produtos/produtos.php">Produtos</a></li>
        <li data-text="Contato"><a href="contato.html">Contato</a></li>
        
        <li data-text="Sair"><a <?php 
                                    if($_SESSION['usuario']){
                                        echo ('class="red" '); 
                                    } else { echo (''); } 

                                    ?>href="autenticacao/logout.php"><p>Sair</p></a></li>



        


    </ul>

</body>

</html>
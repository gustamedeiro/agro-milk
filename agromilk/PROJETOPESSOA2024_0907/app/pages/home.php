<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
<header>
    <div id="header">
        <div class="logo">
            <img class="logo" src="public/img/logo.png" alt="">
            <h1>ProjPessoa</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="../actions/logout.php">Sair</a></li>
            </ul>
        </nav>
    </div>
    <div id="header-banner">    
       
        </div>     
   
    </header>
    <div class="info-user">
    </div>
<main>
    <?php echo "Seja bem vindo(a) {$_SESSION['nome_usuario']}";?>

    <section id="section-2">

        <div id="title-work"> <h2>Tarefas</h2></div>

        <div id="cont-img">
          
        <div class="cont-img-item">
            <img class="img-body" src="../../public/img/image.png" alt="">
            <p><a href="inserirPessoaForm.php">Cadastrar</a></p>
        </div>
        <div class="cont-img-item">
            <img class="img-body"  src="../../public/img/image.png" alt="">
            <p><p><a href="exibirPessoas.php">Listar</a></p></p>

        </div>
        <div class="cont-img-item">
            <img class="img-body"  src="../../public/img/image.png" alt="">
        </div>
        <div class="cont-img-item">
            <img class="img-body" src="../../public/img/image.png" alt="">
        </div>
        </div>

    </section>
</main>

<footer>

</footer>
</body>
</html>
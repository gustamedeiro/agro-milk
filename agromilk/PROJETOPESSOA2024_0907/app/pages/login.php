<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Login</title>

</head>
<body class="container-login">
    
<?php
if(isset($_GET['msgLogin'])){
    echo $_GET['msgLogin'];
}

?>
<h2>Acesso ao sistema</h2>
<div class="login">

<form action="../actions/verificaLogin.php" method="post">

<input type="email" name="login" id="login">

<input type="password" name="senha" id="senha"> <br>

<button type="submit">Entrar</button>
</form>
</div>


</body>
</html>
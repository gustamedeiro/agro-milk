<?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}  
require_once("cabecalho.php");
?>
<main>

<section id="section-2">

<fieldset>

<legend>Cadastro de pessoas</legend>

    <form action="../actions/inserirPessoa.php" method="post">

    <div class="input-item">
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome" id="nome">
    </div>
 
    <div class="input-item">
        <label for="datanasc">Data de nascimento</label> <br>
        <input type="date" name="datanasc" id="datanasc">
    </div>

    <div class="input-item">
        <label for="email">Email</label> <br>
        <input type="email" name="email" id="email">
    </div>

    <div class="input-item">
        <label for="senha">Senha</label>  <br>
        <input type="password" name="senha" id="senha">
    </div>

    <div class="input-item">
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </div>
   
</form>

</fieldset>
   


</section>
</main>

<footer></footer>
</body>
</html>
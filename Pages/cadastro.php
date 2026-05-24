<?php
    require '../SistemaCadastroNecro2026/Classes/usuario.php';
    $usuario = new Usuario();

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2 class="titulo-page">CADASTRO DE USUÁRIO</h2>
    <form method="post">
          <input type="text" name="nome" id="" class="input-forms" placeholder="Digite seu nome">
        <input type="tel" name="telefone" id="" class="input-forms" placeholder="Digite seu telefone"> 
        <input type="email" name="email" id="" class="input-forms" placeholder="Digite seu email">
        <input type="password" name="senha" id="" class="input-forms" placeholder="Digite sua senha">
        <input type="password" name="confsenha" id="" class="input-forms" placeholder="Comfirme sua senha">
        <input type="submit" value="CADASTRAR">
        <p>Já é Cadastrado? Clique <a href="login.php"> Aqui</a> para acessar.</p>
    
    </form>
      
</body>
</html>
<?php require_once 'login_script.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <form action="" method="post" class="form_1">
        <h2 style="text-align: center;padding-bottom: 20px;">Fazer login</h2>
        <input type="text" name="nome" placeholder="Digite seu nome" class="input" autofocus required>
        <input type="email" name="email" placeholder="Digite seu email" class="email" required>
        <input type="password" name="password" class="senha" placeholder="Digite sua senha" required>
        <label for="checkbox">Não sou um robô
        <input type="radio" id="checkbox" name="checkbox" required></label>
        <input type="submit" name="submit" value="Enviar" class="enviar">
    </form>
</body>
</html>
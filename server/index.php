<?php require_once 'script.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post" class="form_1">
        <h1>Formulario</h1>
        <input type="text" name="nome" placeholder="Digite seu nome" class="input" autofocus required>
        <input type="email" name="email" placeholder="Digite seu email" class="email" required>
        <input type="password" name="password" class="senha" placeholder="Digite sua senha" required>
        <input type="password" name="password_confirm" class="senha" placeholder="Confirme sua senha" required>
        <label for="checkbox">Não sou um robô
        <input type="radio" id="checkbox" name="checkbox" required></label>
        <input type="submit" name="submit" value="Enviar" class="enviar">
        <a href="login.php" class="link">Já possui uma conta?</a>
    </form>
        <script src="../client/script.js"></script>
</body>
</html>
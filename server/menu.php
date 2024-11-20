<?php
function ck(){
    global $nome, $email, $senha;
    if(!isset($_COOKIE['nome']) || !isset($_COOKIE['password']) || !isset($_COOKIE['email'])){
        header("Location: index.php");
        exit();
    }

    $nome = htmlspecialchars($_COOKIE['nome']);
    $email = htmlspecialchars($_COOKIE['email']);
    $senha = htmlspecialchars($_COOKIE['password']);
    
    echo "seu nome: $nome <br>";
    echo "seu email: $email <br>";
    echo "sua senha: $senha";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <h1>Este é o menu</h1>
    <form action="" method="post">
        <input type="submit" name="delete" value="Deletar" class="delete">
    </form>

    <?php
        if(isset($_POST['delete']) && isset($_COOKIE['nome'])){
            setcookie('nome', '', time() - 3600);
            setcookie('email', '', time() - 3600);
            setcookie('password', '', time() - 3600);
            header("Location: ". $_SERVER['PHP_SELF']);
            exit();
        }
    ?>
    <h4><?php ck(); ?></h4>
</body>
</html>
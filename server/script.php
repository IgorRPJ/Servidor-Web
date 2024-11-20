<?php
    $tempo_login = 300;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['nome']) && isset($_POST['submit']) && isset($_POST['checkbox']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password_confirm'] == $_POST['password']){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['password'];

            $email = str_replace(" ", "", $email);
            $email = str_replace("/", "", $email);
            $email = str_replace("@.", "@", $email);
            $email = str_replace(".@", "@", $email);
            $email = str_replace(",", ".", $email);
            $email = str_replace(";", ".", $email);
            $senha = str_replace(" ", "", $senha);
            
            $hash = password_hash($senha, PASSWORD_DEFAULT);

            setcookie('nome', $nome, time() + $tempo_login);
            setcookie('email', $email, time() + $tempo_login);
            setcookie('password', $hash, time() + $tempo_login);
            header("Location: menu.php");
            exit();
        }
    }
?>
<?php
global $nome, $email, $senha;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['email'] == $email && $_POST['password'] == $senha && $_POST['nome'] == $nome){
        header("Location: menu.php");
        exit();
    }
}
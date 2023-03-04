<?php 

session_start();

if(!isset($_SESSION['user'])) {
    session_destroy();
    $msg = "Acesso negado! Você está deslogado.";
}

header("location:index.php?msg=".$msg);
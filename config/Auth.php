<?php 

session_start();

if(!isset($_SESSION['user'])) {
    session_destroy();
    $msg = "Acesso negado! Provavelmente você está deslogado.";
}

header("location:index.php?msg=".$msg);
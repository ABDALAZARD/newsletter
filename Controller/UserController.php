<?php 
include '../model/Users.php';

$email = $_POST["email"];
$password = $_POST["password"];

$user = new Users;

$user->setLogin($email, $password);

$actualUser = $user->isLogged();

var_dump($actualUser);

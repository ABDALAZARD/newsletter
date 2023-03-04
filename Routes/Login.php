<?php
    include "../Controllers/Users.php";

    $user = new Users;

    $user->login($_POST['email'],$_POST['password']);
    $actualUser = $user->actualUser;

    if(! strcmp(MD5($_POST['password']), $actualUser['password'])) {
        $_SESSION['id'] = $actualUser['id'];
        $_SESSION['name'] = $actualUser['name'];
        $_SESSION['email'] = $actualUser['email'];

        header("location: dashboard.php");
    }else{
        $msg = "Login/Senha inválido(s)";
?><script>alert( "Senha invalida!");</script>
<?php header("location: index.php?msg=".$msg); } ?>
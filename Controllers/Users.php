<?php
include '../config/DB.php';

class Users extends DB
{
    public $con;
    private $sql;
    public $actualUser;

    public function login($email, $password)
    {
        $this->sql = "SELECT * FROM Users WHERE email LIKE '".$email."' AND password LIKE '".MD5($password)."'";
        $query = mysqli_query($this->con, $this->sql);

        if (! $query) {
            $msg = "Erro! Verifique se seu e-mail ou senha estão corretos. Caso persista o erro, entre em contato com o suporte.";
            header("location:../index.php?msg=".$msg);
        }
        return $this->actualUser = mysqli_fetch_array($query);
    }

    public function logout()
    {
        session_start();
        session_destroy();

        $msg = "Logout efetuado";
        header("location:../index.php?msg=".$msg);
    }
}

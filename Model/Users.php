<?php

include "../config/DB.php";

class Users extends DB
{
    private $sql;
    private $query;

    public $actualUser;

    public function isLogged()
    {
        $this->query = mysqli_query($this->con, $this->sql);

        if (! $this->query) {
            $msg = "Erro! Verifique se seu e-mail ou senha estão corretos. Caso persista o erro, entre em contato com o suporte.";
            
            header("location:../index.php?msg=".$msg);
        }

        return $this->actualUser = mysqli_fetch_array($this->query); 
    }
    public function setLogin($email, $password)
    {
        $this->sql = "SELECT * FROM Users WHERE email LIKE $email AND password LIKE $password";
    }


}
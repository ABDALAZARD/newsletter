<?php
Class DB {

    public $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost', 'root', '123', 'newsletter');
    }
}
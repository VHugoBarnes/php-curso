<?php

class Usuario {

    public const URL_COMPLETA = "http://localhost";

    public $email;
    public $password;

    public function getEmail() {
        return $this -> email;
    }

    public function setEmail($email) {
        $this -> email = $email;
    }

    public function getPassword() {
        return $this -> password;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }

}

$usuario = new Usuario();
echo "<pre> " , var_export($usuario) , " </pre>";
echo "<pre> " , $usuario::URL_COMPLETA , " </pre>";
die();

<?php

session_start();

require 'GoogleAuthenticator.php';

header("Content-Type:text/plain");

if($_SERVER['REQUEST_METHOD'] !== 'POST'){

    echo "error";
    exit;

}

if(!isset($_POST['codigo'])){

    echo "nocodigo";
    exit;

}

if(!isset($_SESSION['secret'])){

    echo "nosecret";
    exit;

}

$codigo = trim($_POST['codigo']);

$ga = new PHPGangsta_GoogleAuthenticator();

$secret = $_SESSION['secret'];

$verificar = $ga->verifyCode($secret, $codigo, 2);

if($verificar){

    echo "success";

}else{

    echo "error";

}
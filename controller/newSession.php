<?php

require '../model/usuario.php';

$email = $_GET['email'];
$senha = "senacrs||devWeb||".$_GET['senha'];
$algoritmo = "AES-256-CBC";
$chave = 'senac@2127';
$iv = "asdPRkToVlerBauL";

$cript = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
$cript64 = base64_encode($cript);

$login = get($email, $cript64);

if($login === true){
    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['logged'] = true;
    header('location: ../view/read.php');
}else{
    header('location: ../index.php');
}
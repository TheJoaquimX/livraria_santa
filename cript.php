<?php

    echo $_GET['senha']."<br>";

    $senha = "senacrs||devWeb||".$_GET['senha'];
    $algoritmo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "asdPRkToVlerBauL";

    $cript = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    $cript64 = base64_encode($cript);

    echo $cript64."<br>";

    $decript64 = base64_decode($cript64);

    $decript = openssl_decrypt($decript64, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    echo $decript;
<?php
    function getConnection(){
        $dsn = 'mysql:host=localhost;dbname=livraria_santa;charset=utf8';
        
        try{
            $pdo = new PDO($dsn, 'root', '');

            return $pdo;
        }catch(PDOException $e){
            return 'ERRO:'.$e->getMessage();
        }
    }
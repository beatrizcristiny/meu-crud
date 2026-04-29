<?php

function db () : PDO
{
    $host = '127.0.0.1';
    $dbname = 'crud_php';
    $user = 'root';
    $pass = ''; // no pdf ta q no laragon eralmete fica vazio

    $dsn = "mysqk:host=$host;dbname=$dbname;charset=utf8mb4";
    
    $pedo = new PDO($dsn, $user, $pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTER_EMULATE_PREPARES => false,

    ]);

    return $pdo;
}



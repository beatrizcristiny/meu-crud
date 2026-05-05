<?php

function db () : PDO
{
    $host = '127.0.0.1';
    $dbname = 'crud_php';
    $user = 'root';
    $pass = ''; // no pdf ta q no laragon eralmete fica vazio

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $user, $pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,

    ]);

    return $pdo;
}



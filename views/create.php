<?php
require_once__DIR__.'/../src/repository.php';
$erros = [];
$titulo = '';
$descricao = '';
$status = 'pendente';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
}
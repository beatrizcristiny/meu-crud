<?php
require_once__DIR__.'/../config/db.php';

function listar_tarefas():array
{
    $sql="SELECT * FROM tarefas ORDER BY id DESC";
    return db()->query($sql)->fetchAll();
}

function criar_tarefa(string $titulo, ?string $descricao, string $status): int
{
    $sql = "INSERT INTO tarefas (titulo, descricao, status) VALUES (?,?,?)";
    $stmt = db ()->prepare($sql);
    $stmt->execute([$titulo, $descricao, $status]);
    return (int) db()->lastInsertId();
}

function buscar_tarefa (int $id): ?array
{
    $sql = "SELECT * FROM tarefas WHERE id = ?";
    $stmt = db()->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt-fetch();
    return $row ?: null;
}

function atualizar_tarefa(int $id, string $titulo, ?string $descricao, string $status): bool
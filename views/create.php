<?php
require_once__DIR__.'/../src/repository.php';
$erros = [];
$titulo = '';
$descricao = '';
$status = 'pendente';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $status = $POST['status'] ?? 'pendente';

    if ($titulo === '') $erros[] ="Titulo é obrigatorio.";
    if (!in_array($status, ['pendente', 'feito'], true)) $erros[] ="Status invalido.";

    if (!erros) {
        atualizar_tarefa($id, $titulo, $descricao !== '' ? $descricao : null, $status);
        header("Location: ?acao=list ");
        exit;
    }
}
?>
<a class="btn" href="?acao=list">Voltar</a>
<h2>Editar tarefa #<?= (int)$id ?></h2>

<?php if ($erros): ?>
    <ul style="color:#a00;">
        <?php foreach ($erros as $e): ?>
            <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
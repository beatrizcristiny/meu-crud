<?php
require_once __DIR__.'/../src/repository.php';
$erros = [];
$titulo = '';
$descricao = '';
$status = 'pendente';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $status = $_POST['status'] ?? 'pendente';

    if ($titulo === '') $erros[] ="Titulo é obrigatorio.";
    if (!in_array($status, ['pendente', 'feito'], true)) $erros[] ="Status invalido.";

    if (!$erros) {
        criar_tarefa($titulo, $descricao !== '' ? $descricao : null, $status);
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
        <form method="post">
            <p>
                <label>Titulo<br>
                <input name="titulo" value="<?= htmlspecialchars($titulo) ?>"
                maxlenght="120" style="widht:100%;" required>
        </label>
            </p>

            <p>
                <label>Descrição<br>
                <textarea name="descricao" rows="4" stule="width:100%;"><?= htmlspecialchars ($descricao) ?></textarea>
        </label>
            </p>

            <p>
                <label>Status<br>
                <select name="status">
                    <option value="pendente" <?= $status === 'pendente' ? 'selected' : '' ?>>pendente</option>
                    <option value="feito" <?= $status === 'feito' ? 'selected' : '' ?>>feito</option>
        </select>
        </label>
            </p>

            <button clas="btn" type="submit">Atualizar</button>
        </form>
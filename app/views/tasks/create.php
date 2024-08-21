<?php ob_start(); ?>
<h1>Adicionar Nova Task</h1>
<form action="<?= Config::getUrlBase() ?>?controller=task&action=create" method="POST">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" required>
    <button type="submit">Adicionar</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include '../app/views/layout.php'; ?>

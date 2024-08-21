<?php ob_start(); ?>
<a class="button" href="<?= Config::getUrlBase() ?>?controller=task&action=create">Adicionar Nova Task</a>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?= htmlspecialchars($task['title']) ?>
            <?php if (!$task['is_completed']): ?>
                <a href="<?= Config::getUrlBase() ?>?controller=task&action=markAsCompleted&id=<?= $task['id'] ?>">[Concluir]</a>
            <?php endif; ?>
            <a href="<?= Config::getUrlBase() ?>?controller=task&action=delete&id=<?= $task['id'] ?>">[Excluir]</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php include '../app/views/layout.php'; ?>

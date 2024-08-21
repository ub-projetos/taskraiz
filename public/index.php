<?php

require_once '../config/Config.php';
require_once '../app/controllers/TaskController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'task';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$taskController = new TaskController();

if ($controller == 'task') {
    if ($action == 'index') {
        $taskController->index();
    } elseif ($action == 'create') {
        $taskController->create();
    } elseif ($action == 'markAsCompleted' && $id) {
        $taskController->markAsCompleted($id);
    } elseif ($action == 'delete' && $id) {
        $taskController->delete($id);
    }
}

<?php

require_once '../app/models/Task.php';

class TaskController {

    private $url;

    public function __construct() {
        $this->url = Config::getUrlBase();
    }


    public function index() {
        $tasks = Task::all();
        include '../app/views/tasks/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            Task::create($title);
            header("Location: $this->url");
        } else {
            include '../app/views/tasks/create.php';
        }
    }

    public function markAsCompleted($id) {
        Task::markAsCompleted($id);
        header("Location: $this->url");
    }

    public function delete($id) {
        Task::delete($id);
        header("Location: $this->url");
    }
}

<?php
// app/models/Task.php

require_once '../config/database.php';

class Task {
    public $id;
    public $title;
    public $is_completed;

    public static function all() {
        $pdo = getConnection();
        $stmt = $pdo->query('SELECT * FROM tasks');
        return $stmt->fetchAll();
    }

    public static function create($title) {
        $pdo = getConnection();
        $stmt = $pdo->prepare('INSERT INTO tasks (title) VALUES (?)');
        $stmt->execute([$title]);
    }

    public static function markAsCompleted($id) {
        $pdo = getConnection();
        $stmt = $pdo->prepare('UPDATE tasks SET is_completed = 1 WHERE id = ?');
        $stmt->execute([$id]);
    }

    public static function delete($id) {
        $pdo = getConnection();
        $stmt = $pdo->prepare('DELETE FROM tasks WHERE id = ?');
        $stmt->execute([$id]);
    }
}

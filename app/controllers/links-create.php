<?php

$title = 'Registrar nuevo proyecto';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'] ?? '';
    $url = $_POST['url'] ?? '';
    $description = $_POST['description'] ?? '';

    $errors = [];

    if (empty($title)) {
        $errors['title'] = 'El título es obligatorio';
    }

    if (empty($url)) {
        $errors['url'] = 'La URL es obligatoria';
    } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errors['url'] = 'La URL no es válida';
    }

    if (empty($description)) {
        $errors['description'] = 'La descripción es obligatoria';
    }

    if (empty($errors)) {
        $database->query('INSERT INTO links (title, url, description) VALUES (:title, :url, :description)', [
            'title' => $title,
            'url' => $url,
            'description' => $description
        ]);

        header('Location: /links');
        exit;
    }
}

require __DIR__ . '/../../resources/links-create.template.php';

?>
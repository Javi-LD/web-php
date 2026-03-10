<?php

$posts = $database->query('SELECT * FROM posts ORDER BY id DESC LIMIT 6')->fetchAll(PDO::FETCH_ASSOC);


require __DIR__ . '/../../resources/home.template.php';



?>
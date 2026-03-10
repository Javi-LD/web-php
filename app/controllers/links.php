<?php

$dsn = 'mysql:localhost=3306;dbname=web-php;charset=utf8mb4';
$pdo = new PDO($dsn, 'root', '');

$links = $pdo->query('SELECT * FROM links ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/../../resources/links.template.php';

?>
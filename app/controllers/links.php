<?php

$links = $database->query('SELECT * FROM links ORDER BY id DESC');

require __DIR__ . '/../../resources/links.template.php';

?>
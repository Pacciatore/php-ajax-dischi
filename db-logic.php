<?php

include __DIR__ . '/database.php';
$filter = '';

if (isset($_GET['filter'])) {
    $filter = strtolower($_GET['filter']);
    $data = [];

    foreach ($database as $album) {
        if (strlen($filter) === 0 || strtolower($album['genre']) == $filter) {
            $data[] = $album;
        }
    }

    $database = $data;
};

<?php

include __DIR__ . '/../db-logic.php';

header('content-type: application/json');

echo json_encode($database);

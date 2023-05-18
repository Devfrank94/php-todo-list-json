<?php

$json_string = file_get_contents('json-tasks.json');

$tasks = json_decode($json_string, true);

echo json_encode($tasks);

header('Content-Type: application/json');


?>






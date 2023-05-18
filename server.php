<?php

$json_string = file_get_contents('json-tasks.json');

$tasks = json_decode($json_string, true);

// axios invia in POST todoItem e lo pusho
if(isset($_POST['text'])){
  $newTask = [
    "text" => $_POST["text"],
    "check" => false,
  ];

    $tasks[] = $newTask;
    filePut($tasks);
  };
  
  function filePut($tasks){
    file_Put_Contents('json-tasks.json', json_encode($tasks));

  };



header('Content-Type: application/json');
echo json_encode($tasks);


?>






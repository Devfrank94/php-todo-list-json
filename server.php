<?php

$json_string = file_get_contents('json-tasks.json');

$tasks = json_decode($json_string, true);

// axios invia in POST text e lo pusho per aggiungere task
if(isset($_POST['text'])){
  $newTask = [
    "text" => $_POST["text"],
    "check" => false,
  ];

    $tasks[] = $newTask;
    filePut($tasks);
  };

// axios invia in POST text e lo rimuove con il metodo splice.
  if(isset($_POST['delIndex'])){
    $index = $_POST['delIndex'];
      array_splice($tasks, $index, 1);
      filePut($tasks);
    };
  
  function filePut($tasks){
    file_Put_Contents('json-tasks.json', json_encode($tasks));

  };



header('Content-Type: application/json');
echo json_encode($tasks);


?>






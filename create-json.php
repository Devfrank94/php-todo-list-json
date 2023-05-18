<?php
$tasks = [
  [ 
    'task' => 'Fai la spesa',
    'check' => 'false',
  ],
  [ 
    'task' => 'Compra un libro',
    'check' => 'false',
  ],
  [ 
    'task' => 'Vai in palestra',
    'check' => 'false',
  ]

];

  
  $json_string = json_encode($tasks);
  file_put_contents('json-tasks.json', $json_string);

?>
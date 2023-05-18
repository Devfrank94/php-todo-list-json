<?php
$tasks = [
  [ 
    'text' => 'Fai la spesa',
    'check' => 'false',
  ],
  [ 
    'text' => 'Compra un libro',
    'check' => 'false',
  ],
  [ 
    'text' => 'Vai in palestra',
    'check' => 'false',
  ]

];

  
  $json_string = json_encode($tasks);
  file_put_contents('json-tasks.json', $json_string);

?>
<?php
  $local = "localhost";//ou"127.0.00.1"
  $user = "root";
  $password = "";//lisboa
  $database = "vendas";

  $conectar = new Mysqli($local, $user, $password, $database);

  var_dump($conectar);
?>

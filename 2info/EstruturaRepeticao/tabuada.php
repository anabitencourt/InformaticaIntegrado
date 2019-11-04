<?php
$i = 1;
//$tabuada = 2;
$tabuada = $_POST["tabuada"];
while($i <= 10){
  $tab = $tabuada * $i;
  echo $tabuada . " x " . $i . " = " . $tab;
  echo "<br>";
  $i = $i + 1;
}
?>

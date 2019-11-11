<?php

/*1 - receber os dois campos do formulário
2 - gerar o contador regressivo com o laço do tipo FOR*/
$inicio = $_POST["inicio"];
$termino = $_POST["termino"];

//echo "<ol>";
for($i = $inicio; $i >= $termino; $i--){
  echo "<li>$i</li>";
}
//echo "</ol>";

?>

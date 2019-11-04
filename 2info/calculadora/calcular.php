<?php
  $valor1 = $_POST["valor1"];
  $valor2 = $_POST["valor2"];
  $operacao = $_POST["operacao"];

  if($operacao == "+"){
    $soma = $valor1 + $valor2;
    echo "Soma = $soma";
  }elseif ($operacao == "-") {
    $sub = $valor1 - $valor2;
    echo "Subtração = $sub";
  }elseif ($operacao == "*") {
    $multi = $valor1 * $valor2;
    echo "Multiplicação = $multi";
  }elseif ($operacao == "/") {
    //evitar divisão por zero
    if($valor2 == 0){
      echo "Impossível dividir por 0";
    }else{
      $div = $valor1 / $valor2;
      echo "Divisão = $div";
    }
  }else{
    echo "Operação Inválida!!!";
  }
?>

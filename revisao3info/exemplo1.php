<?php
	$num1=8;
	var_dump($num1);
	$num2=5.8; 
	var_dump($num2);
	$num3="10";
	var_dump($num3);
	$num4 = $num1 + $num2;	
	echo "<br>" . $num4;
	echo "<hr>";
	
	if($num4 == 10)
 	{
 		echo "A variável num4 é igual a 10";
 	}else 
 	{
 		echo "A variável num4 é diferente de 10";
 	}
 	echo "<hr>";
	if($num4 == 10)
 	{
 		echo "A variável num4 é igual a 10";
 	}elseif($num4 < 10)
 	{
 		echo "A variável num4 é menor que 10";
 	}elseif($num4 > 10)
 	{
 		echo "A variável num4 é maior que 10";
 	}else 
 	{
 		echo "A variável num4 é inválida";
 	}
 	
?>
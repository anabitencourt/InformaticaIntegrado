<?php
class Celular{ //criação da classe
	/*declaração dos atributos com visibilidade
	pública, ou seja, todos tem acesso.
	*/
	public $resolucaoTela, $resolucaoCamera;
	public $marca, $peso, $sistema;
}
//instanciar a classe em um objeto
$objCelular1 = new Celular();

//armazenar os valores nos atributos do objeto
$objCelular1->marca = "LG k10";
$objCelular1->sistema = "Android 8.0";
$objCelular1->peso = 0.300;
$objCelular1->resolucaoTela = 5.5;
$objCelular1->resolucaoCamera = 13;

echo "Marca = " . $objCelular1->marca;
echo "<br>Sistema = " . $objCelular1->sistema;
echo "<br>Peso = " . $objCelular1->peso;
echo "<br>Resolução tela = " . $objCelular1->resolucaoTela;
echo "<br>Resolução Camera = " . $objCelular1->resolucaoCamera;
//resgatar valor dos atributos do objeto
?>
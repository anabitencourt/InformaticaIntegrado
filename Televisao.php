<?php
class Televisao{
	public $volume, $canal;
	
	//métodos assessores
	public function setVolume($volume) {
		$this->volume = $volume;
	}
	public function setCanal($canal) {
		$this->canal = $canal;
	}
	public function getVolume(){
		return $this->volume;
	}
	public function getCanal(){
		return $this->canal;
	}
	
	public function status(){
		echo "<hr>Status";
		echo "<br>Canal  = " . $this->getCanal();
		echo "<br>Volume = " . $this->getVolume();
	}

	public function aumentarVolume(){
		//$this->volume++; //$this->volume = $this->volume + 1; 	
		$volume = $this->getVolume();//receber valor do volume
		$volume++;//aumenta o volume em 1
		$this->setVolume($volume);//seta o valor do volume
	}
	public function diminuirVolume(){
		//$this->volume--; //$this->volume = $this->volume - 1; 	
		$volume = $this->getVolume();//receber valor do volume
		$volume--;//diminui o volume em 1
		$this->setVolume($volume);//seta o valor do volume
	}
	public function aumentarCanal(){
		//$this->canal++; //$this->canal = $this->canal + 1; 
		$canal = $this->getCanal();//receber valor do volume
		$canal++;//diminui o canal em 1
		$this->setCanal($canal);//seta o valor do volume	
	}
	public function diminuirCanal(){
		//$this->canal--; //$this->canal = $this->canal - 1; 
		$canal = $this->getCanal();//receber valor do volume
		$canal--;//diminui o canal em 1
		$this->setCanal($canal);//seta o valor do volume	
	}
}
$tv1 = new Televisao();
echo "<hr><strong>Estado inicial da Televisão</strong>";

$volumeRecebido = 9;
$canalRecebido = 56;

$tv1->setVolume($volumeRecebido);
$tv1->setCanal($canalRecebido);
$tv1->status();

echo "<hr><strong>Aumentando o volume</strong>";
$tv1->aumentarVolume();
$tv1->status();
echo "<hr><strong>Diminuindo o volume</strong>";
$tv1->diminuirVolume();
$tv1->status();
echo "<hr><strong>Aumentando o canal</strong>";
$tv1->aumentarCanal();
$tv1->status();
echo "<hr><strong>Diminuindo o canal</strong>";
$tv1->diminuirCanal();
$tv1->status();

/*$tv1->volume = 46;
$tv1->canal = 19;
$tv1->status();

$tv1->volume = 89;
$tv1->canal = 190;
$tv1->status();*/
?>
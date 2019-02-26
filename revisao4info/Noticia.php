<?php	
/*
 + public
 - private
 # protected
*/
class Noticia{
	public $id, $titulo, $descricao, $autor;
	public $dataPublicacao, $curso;
	
	public function cadastrar($dados){
		//$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso)
		list($titulo, $descricao, $autor, $dataPublicacao, $curso) = $dados;
		
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);
		$this->setAutor($autor);
		$this->setDataPublicacao($dataPublicacao);
		$this->setCurso($curso);
		
		echo "<hr>Título: ". $this->getTitulo();
		echo "<br>Descrição: ". $this->getTitulo();
		echo "<br>Autor: ". $autor;
		echo "<br>Publicado em: ". $dataPublicacao;
		echo "<br>Curso: ". $curso;
		echo "<hr>";
	}
	public function alterar($dados){}
	public function excluir($id){}
	public function buscarUm($id){}
	public function buscarTodos(){}
}
?>
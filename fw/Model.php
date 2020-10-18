<?php 

abstract class Model{ //no se puede instanciar el abstracto, es una parte significaría
	protected $db; // para q la hija pueda acceder pero no desde afuera
	public function __construct(){
		$this->db=Database::getInstance();
	}
}




 ?>
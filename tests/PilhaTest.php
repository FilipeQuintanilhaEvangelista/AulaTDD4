<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PilhaTest extends TestCase{
	
	public function testInserirItemAleatorio(){
		
		$array = new Pilha();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

	 	$this->assertEquals($array->total_de_itens(), 2);


			
							
	}
	
	

	public function testRemoverItens(){

		$array = new Pilha();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(5);

		$itemRemovido = $array->remover();

		$this->assertEquals($itemRemovido,5);

			
	}
}


$testsuite = new PilhaTest();
$testsuite->testInserirItemAleatorio();
$testsuite->testRemoverItens();


?>
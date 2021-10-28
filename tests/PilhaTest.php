<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PilhaTest extends TestCase{
	
	private $total;
	private $ok;


	public function testInserirItemAleatorio(){
		
		$array = new Pilha();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

	 
		if ( $array->total_de_itens() == 2 ){
			$this->ok ++;	
			}						
			$this->total ++;


			
							
	}
	
	

	public function testRemoverItens(){

		$array = new Pilha();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(5);

		$itemRemovido = $array->remover();


		if ( $itemRemovido == "5" ){
			$this->ok ++;	
			}						
			$this->total ++;

			
	}




	




$testsuite = new PilhaTest();

$testsuite->setUp();


$testsuite->testInserirItemAleatorio();
$testsuite->testRemoverItens();
$testsuite->summary();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		abstract class Operacion{
			protected $valor1;
			protected $valor2;
			protected $resultado;

			public function __construct($v1,$v2){
				$this->valor1=$v1;
				$this->valor2=$v2;
			}
			public function imprimirResultado(){
				echo $this->resultado;
				echo '<br>';
			}
		}

		class Suma extends Operacion{
			protected $titulo;
			public function __construct($v1,$v2,$tit){
				parent::__construct($v1,$v2);
				$this->titulo=$tit;
			}
			public function operar(){
				echo $this->titulo;
				echo $this->valor1.' + '.$this->valor2.' es: ';
				$this->resultado=$this->valor1+$this->valor2;

			}
		}
		
$suma=new Suma(23,65,'hola esta es la operacion ');
$suma->operar();
$suma->imprimirResultado();

$suma2=new Suma(23436,652345234,'hola del valle ');
$suma2->operar();
$suma2->imprimirResultado();




	 ?>
</body>
</html>
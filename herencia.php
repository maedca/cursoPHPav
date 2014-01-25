<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		class Operacion{
			protected $valor1;
			protected $valor2;
			protected $resultado;

			public function cargar1($v){
				$this->valor1=$v;
			}
			public function cargar2($v){
				$this->valor2=$v;
			}
			public function imprimirResultado(){
				echo $this->resultado;
			}
		}

		class Suma extends Operacion{
			public function operar(){
				$this->resultado=$this->valor1+$this->valor2;
			}
			public function imprimirResultado(){
				echo "la suma de $this->valor1 y $this->valor2 es: ";
				parent::imprimirResultado();
			}
		}

		class Resta extends Operacion{
			public function operar(){
				$this->resultado=$this->valor1-$this->valor2;
			}
			public function imprimirResultado(){
				echo "la resta de $this->valor1 y $this->valor2 es: ";
				parent::imprimirResultado();//sobre escritura
			} 
		}
$suma=new Resta();
$suma->cargar1(40);
$suma->cargar2(5);
$suma->operar();
$suma->imprimirResultado();

	 ?>
</body>
</html>
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

			public function cargar1($v){
				$this->valor1=$v;
			}
			public function cargar2($v){
				$this->valor2=$v;
			}
			public function imprimirResultado(){
				echo $this->resultado;
				echo '<br>';
			}
			public abstract function operar();
		}

		class Suma extends Operacion{
			public function operar(){
				$this->resultado=$this->valor1+$this->valor2;
			}
		}

$suma = new Suma();
$suma->cargar1(98);
$suma->cargar2(56);
$suma->operar();
$suma->imprimirResultado();

	 ?>
</body>
</html>
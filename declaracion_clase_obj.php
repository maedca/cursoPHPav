<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		class Persona{
			private $nombre;
			private $color;

			public function inicializar($nom, $col){
				$this->nombre=$nom;
				$this->color=$col;
			}
			public function imprimir(){
				echo $this->nombre;
				echo '<br>';
				echo $this->color;
				echo '<br>';

			}
		}
		class Numeros{
			private $x;
			private $y;

			public function inicializar($a, $b){
				$this->x=$a;
				$this->y=$b;
			}

			function sumar($a,$b){
				$suma=$a+$b;
				echo $suma;
			}
		}

		$per1=new Persona();
		$per1->inicializar('juan', 'marron');
		$per1->imprimir();
		$manuel=new Persona();
		$manuel->inicializar('Manuel Eduardo','Green');
		$manuel->imprimir();

		$numero=new Numeros();
		$numero->sumar(4,5);
	 ?>
</body>
</html>
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

		$per1=new Persona();
		$per1->inicializar('juan', 'marron');
		$per1->imprimir();
		$manuel=new Persona();
		$manuel->inicializar('Manuel Eduardo','Green');
		$manuel->imprimir();
	 ?>
</body>
</html>
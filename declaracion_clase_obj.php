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

		class Menu{
			private $enlaces=array();
			private $titulos=array();

			public function cargarOpcion($en, $tit){
				$this->enlaces[]=$en;
				$this->titulos[]=$tit;
			}
			function mostrar(){
				for($f=0; $f<count($this->enlaces);$f++){
					echo'<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
					echo '';
				}
			}
		}

		class  CabeceraPagina{
			private $titulo;
			private $ubicacion;
			public function inicializar($tit, $ubi){
				$this->titulo=$tit;
				$this->ubicacion=$ubi;
			}
			function graficar(){
				echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
				echo $this->titulo;
				echo "</div>";
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

		$menu1=new Menu();
		$menu1->cargarOpcion('http://google.co.ve', 'buscador google');
		$menu1->cargarOpcion('http://gmail.com','correo electronico');

		$menu1->mostrar();

	 ?>
		<header>
			<?php $encabezado=new CabeceraPagina();
			$encabezado->inicializar('Titulo del curso ', 'center');
			$encabezado->graficar(); ?>
		</header>
	 <nav>
	   <ul>
	   	<li><?php $menu2=new Menu();
	   		$menu2->cargarOpcion('http://facebook.com','facebook');
	   		$menu2->mostrar();
	   	 ?></li>
	   	 <li><?php $menu2=new Menu();
	   		$menu2->cargarOpcion('http://msn.com','hotmal');
	   		$menu2->mostrar();
	   	 ?></li>
	   </ul>
	 </nav>

	 <?php 
	 	$encabezado2=new CabeceraPagina();
	 	$encabezado2->inicializar('Titulo 2','right');
	 	$encabezado2->graficar();
	  ?>

</body>
</html>
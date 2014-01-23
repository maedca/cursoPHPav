<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		class Cabecera{
			private $titulo;
			public function __construct($tit){
				$this->titulo=$tit;
			}
			public function graficar(){
				echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
			}
		}

		class Cuerpo{
			private $lineas=array();
			public function insertarParrafo($li){
				$this->lineas[]=$li;
			}
			public function graficar(){
				for ($f=0; $f<count($this->lineas);$f++){
					echo '<p>'.$this->lineas[$f].'</p>';
				}
			}
		}

		class Pie{
			private $titulo;
			public function __construct($perro){
				$this->titulo=$perro;
			}
			public function graficar(){
				echo '<h5 style="color:rojo">'.$this->titulo.'</h5>';
			}
		}
		class Pagina{
			private $cabecera;
			private $cuerpo;
			private $pie;

			public function __construct($texto1, $texto2){
				$this->cabecera=new Cabecera($texto1);
				$this->cuerpo=new Cuerpo();
				$this->pie=new Pie($texto2);
			}
			public function insertarCuerpo($texto){
				$this->cuerpo->insertarParrafo($texto);
			}
			public function graficar(){
				$this->cabecera->graficar();
				$this->cuerpo->graficar();
				$this->pie->graficar();
			}
		}

		$pagina1=new Pagina('Titulo de la pagina' , 'pie de pagina');
		$pagina1->insertarCuerpo('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quae, ea deserunt sequi velit impedit blanditiis suscipit quidem iusto voluptas facilis labore quas praesentium quaerat laborum. Sint facere adipisci dolores!');
		$pagina1->insertarCuerpo('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, labore, laboriosam, similique distinctio dicta nulla soluta neque alias vel autem illum modi ex reprehenderit est optio. Mollitia quae labore dignissimos.');
		$pagina1->insertarCuerpo('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, dignissimos, laborum ex dolor voluptas aliquam eos doloremque natus eligendi molestias numquam quisquam consectetur rem iure qui laudantium incidunt commodi vero.');
		$pagina1->graficar();
	 ?>
</body>
</html>
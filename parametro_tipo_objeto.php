<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		class Opcion{
			private $titulo;
			private $enlace;
			private $colorFondo;

			public function __construct($tit,$enl,$cfon){
				$this->titulo=$tit;
				$this->enlace=$enl;
				$this->colorFondo=$cfon;
			}
			public function graficar(){
				echo '<a style="background-color:'.$this->colorFondo.'" 
				href="'.$this->enlace.'">'.$this->titulo.'</a>';
			}

		} 
		class Menu{
			private $opciones=array();
			private $direccion;

			public function __construct($dir){
				$this->direccion=$dir;
			}
			public function insertar($op){
				$this->opciones[]=$op;
			}

			private function graficarHorizontal(){
				for($f=0;$f<count($this->opciones);$f++){
					$this->opciones[$f]->graficar();
				}
			}
			private function graficarVertical(){
				for($f=0;$f<count($this->opciones);$f++){
					echo '<br>';
					$this->opciones[$f]->graficar();
					echo '<br>';
				}
			}
			public function graficar(){
				if(strtolower($this->direccion)=='horizontal'){
					$this->graficarHorizontal();
				}else{
					if (strtolower($this->direccion)=="vertical"){
						$this->graficarVertical();
					}
				}
			}

		}

		$menu1=new Menu('horizontal');
		$opcion1=new Opcion('hola','http://hola.com','#c3d9ff');
		$menu1->insertar($opcion1);
		
		$opcion2=new Opcion('facebook','http://facebook.com','#cdeb8d');
		$menu1->insertar($opcion2);
		$opcion3=new Opcion('google','http://google.com','#cacaca');
		$menu1->insertar($opcion3);

		$menu1->graficar();



		$menu2=new Menu('verTical');
		$opcion1=new Opcion('hola','http://hola.com','#c3d9ff');
		$menu2->insertar($opcion1);
		
		$opcion2=new Opcion('facebook','http://facebook.com','#cdeb8d');
		$menu2->insertar($opcion2);
		$opcion3=new Opcion('google','http://google.com','#cacaca');
		$menu2->insertar($opcion3);

		$menu2->graficar();

	 ?>
</body>
</html>
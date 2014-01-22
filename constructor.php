<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	class  CabeceraPagina{
			private $titulo;
			private $ubicacion;
			public function __construct($tit, $ubi){
				$this->titulo=$tit;
				$this->ubicacion=$ubi;
			}
			function graficar(){
				echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
				echo $this->titulo;
				echo "</div>";
			}
		}
?>
		<header>
			<?php $encabezado=new CabeceraPagina('Titulo constructor','center');
			$encabezado->graficar(); ?>
		</header>
	 <?php 
	 	$encabezado2=new CabeceraPagina('Holaaaa','right');
	 	
	 	$encabezado2->graficar();
	  ?>

</body>
</html>
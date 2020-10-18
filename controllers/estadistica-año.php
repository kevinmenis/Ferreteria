<!--  ../controllers/estadistica-año.php  -->

<?php 
	
	require '../fw/fw.php' ;
	require '../views/EstadisticaAño.php' ;
	require '../models/Ventas.php' ;

	$e = new EstadisticaAño ;
	$v = new Ventas ;

	if ( isset ( $_POST['anio'] ) ) {
		$anio = $_POST['anio'] ;
	}


	if ( !isset ( $_POST['anio'] ) ) {
		$anio = date ('Y') ;
	}

	$e->totalAño = $v->totalAño ( $anio ) ;
	$e->mesMin = $v->mesMin ( $anio ) ;
	$e->mesMax = $v->mesMax ( $anio ) ;
	$e->record = $v->VentaRecord ( $anio ) ;

	$e->render() ;


?>
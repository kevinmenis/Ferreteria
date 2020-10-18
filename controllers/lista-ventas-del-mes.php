<!-- ../controllers/lista-ventas-del-mes.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaVentasDelMes.php' ;
	require '../models/Ventas.php' ;
	require '../models/Meses.php'  ;

	$v = new Ventas ;
	$m = new Meses ;
	$l = new ListaVentasDelMes ;

	if ( isset ( $_POST['mes'] ) ) {

		$mes  = $_POST['mes'] ;		
		$anio = $_POST['anio'] ;
	}

	if ( !isset ( $_POST['mes'] ) ) {

		$mes  = date ('n') ;
		$anio = date ('Y') ;	
	}

	$l->lista = $v->ListaVentasDelMes ( $mes , $anio ) ;
	$l->total = $v->totalMes( $mes , $anio ) ;
	$l->mes = $m->nombreMes ( $mes ) ; 

	$l->render() ;	

?>


<?php 

/*	../controllers/estadisitca-mes.php;  */

	require '../fw/fw.php' ;
	require '../views/EstadisticaMes.php' ;
	require '../models/Ventas.php' ;
	require '../models/Meses.php' ;

	$v = new Ventas ;
	$m = new Meses ;
	$e = new EstadisticaMes ;

	if ( isset ( $_POST['mes'] ) ) {
		$mes  = $_POST['mes'] ;
		$anio = $_POST['anio'] ;
	}

	if ( !isset ( $_POST['mes'] ) ) {
		$mes  = date ('m') ;
		$anio = date ('Y') ;
	}

	$e->totalMes = $v->totalMes ( $mes , $anio ) ;
	$e->promedioDia = $v->promedioDia ( $mes , $anio ) ;
	$e->diaMax = $v->diaMax ( $mes , $anio ) ;
	$e->diaMin = $v->diaMin ( $mes , $anio ) ;	
	$e->nombreMes = $m->nombreMes ( $mes ) ;
	$e->lista = $v->ListaVentasDelMes ( $mes , $anio ) ;

	$e-> render() ;


?>
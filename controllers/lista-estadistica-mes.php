<?php 

/*	../controllers/lista-estadisitca-mes.php;  */

	require '../fw/fw.php' ;
	require '../views/ListaEstadisticaMes.php' ;
	require '../models/Ventas.php' ;
	require '../models/Meses.php' ;

	if ( ! isset ( $_POST['mes'] ) ) {

		$anioActual = date ('Y') ;
		$mesActual  = date ('m') ;

		$v = new Ventas ;

		$total  = $v->totalMes    ( $mesActual , $anioActual ) ;
		$maximo = $v->diaMax      ( $mesActual , $anioActual ) ;
		$minimo = $v->diaMin      ( $mesActual , $anioActual ) ;
		$prom   = $v->promedioDia ( $mesActual , $anioActual ) ;

		$m = new Meses ;

		$nombreMes = $m->nombreMes ( $mesActual ) ;

		$em = new ListaEstadisticaMes ;

		$em->totalMes    = $total  ;
		$em->promedioDia = $prom   ;
		$em->diaMax      = $maximo ;
		$em->diaMin      = $minimo ;	
		$em->nombreMes   = $nombreMes ;

		$em->render() ;

		exit ;

	}


	$em = new ListaEstadisticaMes ;

	$em-> render() ;


?>
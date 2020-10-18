<!--  ../controllers/nueva-venta.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../models/Ventas.php' ;
	require '../views/NuevaVenta.php' ;

	$v = new Ventas ;
	$n = new NuevaVenta ;

	$hoy  = date ( 'Y/m/d' ) ;
	
	$n->ventas = $v->ListaVentasDelDia ( $hoy ) ;
	$n->total  = $v->TotalDia ( $hoy ) ;

	if ( isset ( $_POST['ingresar']) ) {
		$v->NuevaVenta ( $_POST['fecha'] , $_POST['venta'] ) ;
		header ( 'Location: ../controllers/nueva-venta.php' ) ;		
	}

	$n->render() ;

?>
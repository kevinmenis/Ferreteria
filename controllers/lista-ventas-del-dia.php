<!--  ../controllers/lista-ventas-del-dia.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../models/Ventas.php' ;
	require '../views/ListaVentasDelDia.php' ;

	$l = new ListaVentasDelDia() ;
	$v = new Ventas() ;

	if ( !isset ( $_POST['fecha'] ) ) {
		
		$hoy = date ( 'Y/m/d' ) ;

		$l->lista = $v->ListaVentasDelDia ( $hoy ) ;
		$l->total = $v->TotalDia ( $hoy ) ;
	}


	if ( isset ( $_POST['fecha'] ) ) {
		
		$l->lista = $v->ListaVentasDelDia ( $_POST['fecha'] ) ;
		$l->total = $v->TotalDia ( $_POST['fecha'] ) ;
	}

	$l->render() ;

?>
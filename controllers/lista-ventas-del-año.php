<!--  ../controllers/lista-ventas-del-año.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaVentasDelAño.php' ;
	require '../models/Ventas.php' ;

	$v = new Ventas ;		
	$l = new ListaVentasDelAño ;

	if ( isset ( $_POST['anio'] ) ) 
		$anio = $_POST['anio'] ; 

	if ( !isset ( $_POST['anio'] ) ) 
		$anio = date ('Y') ;
	

	$l->lista = $v->ListaVentasDelAnio ( $anio ) ; 
	$l->total = $v->totalAño ( $anio ) ;

	$l->render() ;

?>
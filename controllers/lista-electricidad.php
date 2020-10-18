<!--  ../controllers/lista-electricidad.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaElectricidad.php' ;
	require '../models/Productos.php' ;

	$p = new Productos ;
	$l = new ListaElectricidad ;

	$l->todos = $p->ListaProductosTodos('3') ;

	if ( isset ( $_POST['cambiar-precio'] ) ) {

		$p->CambiarPrecio ( '3' , $_POST['porciento'] ) ;
		header ( 'Location: ../controllers/lista-electricidad.php' ) ; 	
	}

	$l->render() ;

?>
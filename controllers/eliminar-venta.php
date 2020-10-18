<!--  ../controllers/eliminar-venta.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Ventas.php' ;
	require '../views/EliminarVenta.php' ;

	$p = new Ventas ;
	$v = new EliminarVenta ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/nueva-venta.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) {

		$id_fiado = $_REQUEST['id'] ;
		$p->EliminarVenta ( $id_fiado ) ;
		header ( 'Location: ../controllers/nueva-venta.php' ) ;

		$v->render() ;
		exit() ;
	}

	$v->render() ;


?>
<!--  ../controllers/nuevo-prestamo.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../models/Prestamos.php' ;
	require '../views/NuevoPrestamo.php' ;

	$v = new NuevoPrestamo ;
	$p = new Prestamos ;

	if ( isset ( $_POST['Aceptar'] ) ) {	
		$p->nuevoPrestamo ( $_POST['nombre'] , $_POST['descripcion'] , $_POST['cantidad'] , $_POST['fecha'] ) ;
		header ( 'Location: ../controllers/lista-prestamos.php' ) ;
	}

	$v->render() ;
	

?>
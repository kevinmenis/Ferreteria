<!--  ../controllers/eliminar-prestamo.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Prestamos.php' ;
	require '../views/EliminarPrestamo.php' ;

	$p = new Prestamos ;
	$v = new EliminarPrestamo ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/lista-prestamos.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) {

		$id_prestamo = $_REQUEST['id'] ;
		$v->result = $p->BuscarPrestamo ( $id_prestamo ) ;

		if ( isset ( $_POST['aceptar'] ) ) {
			$p->EliminarPrestamo ( $id_prestamo ) ;
			header ( 'Location: ../controllers/lista-prestamos.php' ) ;
		}

		if ( isset ( $_POST['cancelar'] ) ) {
			header ( 'Location: ../controllers/lista-prestamos.php' ) ;
		}

		$v->render() ;
		exit() ;
	}

	

	$v->render() ;


?>
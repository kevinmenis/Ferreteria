<!--  ../controllers/editar-prestamo.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Prestamos.php' ;
	require '../views/EditarPrestamo.php' ;

	$p = new Prestamos ;
	$v = new EditarPrestamo ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/lista-prestamos.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) {

		$id_prestamo = $_REQUEST['id'] ;
		$v->result = $p->BuscarPrestamo ( $id_prestamo ) ;

		if ( isset ( $_POST['aceptar'] ) ) {
			$p->EditarPrestamo ( $id_prestamo , $_POST['cliente'] , $_POST['descripcion'] , $_POST['cantidad'] , $_POST['fecha'] ) ;
			header ( 'Location: ../controllers/lista-prestamos.php' ) ;
		}

		$v->render() ;
		exit() ;
	}


	$v->render() ;


?>
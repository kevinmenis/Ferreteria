<!--  ../controllers/eliminar-fiado.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Fiados.php' ;
	require '../views/EliminarFiado.php' ;

	$p = new Fiados ;
	$v = new EliminarFiado ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/lista-fiados.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) {

		$id_fiado = $_REQUEST['id'] ;
		$v->result = $p->BuscarFiado ( $id_fiado ) ;

		if ( isset ( $_POST['aceptar'] ) ) {
			$p->EliminarFiado ( $id_fiado ) ;
			header ( 'Location: ../controllers/lista-fiados.php' ) ;
		}

		if ( isset ( $_POST['cancelar'] ) ) {
			header ( 'Location: ../controllers/lista-fiados.php' ) ;
		}

		$v->render() ;
		exit() ;
	}


	$v->render() ;


?>
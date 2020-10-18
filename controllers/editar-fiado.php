<!--  ../controllers/editar-fiado.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Fiados.php' ;
	require '../views/EditarFiado.php' ;

	$p = new Fiados ;
	$v = new EditarFiado ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/lista-fiados.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) {

		$id_fiado = $_REQUEST['id'] ;
		$v->result = $p->BuscarFiado ( $id_fiado ) ;

		if ( isset ( $_POST['aceptar'] ) ) {
			$p->EditarFiado ( $id_fiado , $_POST['fecha'] , $_POST['cliente'] , $_POST['descripcion'] , $_POST['monto'] ) ;
			header ( 'Location: ../controllers/lista-fiados.php' ) ;
		}
		
		$v->render() ;
		exit() ;
	}


	$v->render() ;


?>
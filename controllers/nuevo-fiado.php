<!--  ../controllers/nuevo-fiado.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../models/Fiados.php' ;
	require '../views/NuevoFiado.php' ;

	$f = new Fiados() ;
	$n = new NuevoFiado() ;

	if ( isset ( $_POST['Aceptar'] ) ) {
		$f->NuevoFiado ( $_POST['fecha'] , $_POST['cliente'] , $_POST['desc'] , $_POST['monto'] ) ;
		header ( 'Location: ../controllers/lista-fiados.php' ) ;
	}

	$n->render() ;

?>
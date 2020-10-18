<!--  ../controllers/lista-pintureria.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaPintureria.php' ;
	require '../models/Productos.php' ;

	$p = new Productos ;
	$l = new ListaPintureria ;

	$l->todos = $p->ListaProductosTodos('2') ;

	if ( isset ( $_POST['cambiar-precio'] ) ) {

		$p->CambiarPrecio ( '2' , $_POST['porciento'] ) ;
		header ( 'Location: ../controllers/lista-pintureria.php' ) ; 	
	}

	$l->render() ;

?>
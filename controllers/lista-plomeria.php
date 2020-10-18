<!--  ../controllers/lista-plomeria.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaPlomeria.php' ;
	require '../models/Productos.php' ;

	$p = new Productos ;
	$l = new ListaPlomeria ;

	$l->todos = $p->ListaProductosTodos ('1') ;

	if ( isset ( $_POST['cambiar-precio'] ) ) {

		$p->CambiarPrecio ( '1' , $_POST['cambiar-precio'] ) ;
		header ( 'Location: ../controllers/lista-plomeria.php' ) ; 	
	}

	$l->render() ;

?>
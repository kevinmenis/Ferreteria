<!--  ../controllers/lista-ferreteria.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaFerreteria.php' ;
	require '../models/Productos.php' ;

	$p = new Productos ;
	$l = new ListaFerreteria ;

	if ( empty ( $_REQUEST['producto'] ) ) {		
		header ( 'Location: ../controllers/menu-ferreteria.php' ) ;
	}

	if ( $_REQUEST['producto'] == 'Bulones' ) {

		$l->todos = $p->ListaProductos ( 'bulones' , '' , '' ) ;

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'bulones' , '' , '' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-ferreteria.php?producto=Bulones' ) ; 		
		}

		$l->render() ;
		exit() ;
	}

	if ( $_REQUEST['producto'] == 'Mechas' ) {	

		$l->todos = $p->ListaProductos ( 'mecha acero' , 'mecha vidia' , '' ) ;	

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'mecha acero' , 'mecha vidia' , '' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-ferreteria.php?producto=Mechas' ) ; 		
		}
		
		$l->render() ;
		exit() ;
	}

	if ( $_REQUEST['producto'] == 'Varillas' ) {	

		$l->todos = $p->ListaProductos ( 'varilla' , 'varilla milimetrica' , '' ) ;

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'varilla' , 'varilla milimetrica' , '' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-ferreteria.php?producto=Varillas' ) ; 		
		}

		$l->render() ;
		exit() ;
	}


	$l->render() ;

?>
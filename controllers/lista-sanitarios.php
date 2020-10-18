<!--  ../controllers/lista-sanitarios.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaSanitarios.php' ;
	require '../models/Productos.php' ;

	$p = new Productos ;
	$l = new ListaSanitarios ;

	if ( empty ( $_REQUEST['producto'] ) ) {		
		header ( 'Location: ../controllers/menu-sanitarios.php' ) ;
	}

	if ( $_REQUEST['producto'] == 'Flexibles' ) {		
		$l->todos = $p->ListaProductos ( 'flexible pvc' , 'flexible mallado' , 'flexible gas' ) ;

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'flexible pvc' , 'flexible mallado' , 'flexible gas' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-sanitarios.php?producto=Flexibles' ) ; 		
		}

		$l->render() ;
		exit() ;
	}

	if ( $_REQUEST['producto'] == 'Canillas' ) {		
		$l->todos = $p->ListaProductos ( 'canilla pvc' , 'canilla metal' , 'canilla lavarropa' ) ;

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'canilla pvc' , 'canilla metal' , 'canilla lavarropa' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-sanitarios.php?producto=Canillas' ) ;
		}

		$l->render() ;
		exit() ;
	}

	if ( $_REQUEST['producto'] == 'Llaves-de-paso' ) {		
		$l->todos = $p->ListaProductos ( 'llave de paso pvc' , 'llave de paso metal' , 'llave de paso fusión verde' ) ;

		if ( isset ( $_POST['cambiar-precio'] ) ) {
			$p->CambiarPrecio2 ( 'llave de paso pvc' , 'llave de paso metal' , 'llave de paso fusión verde' , $_POST['cambiar-precio'] ) ;
			header ( 'Location: ../controllers/lista-sanitarios.php?producto=Llaves-de-paso' ) ;
		}
		
		$l->render() ;		
		exit() ;
	}

	$l->render() ;

?>
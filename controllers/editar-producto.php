<!--  ../controllers/editar-producto.php  -->

<?php  

	require '../fw/fw.php' ;
	require '../models/Productos.php' ;
	require '../views/EditarProducto.php' ;

	$p = new Productos ;
	$v = new EditarProducto ;

	if ( empty ( $_REQUEST['id'] ) ) {		
		header ( 'Location: ../controllers/menu-productos.php' ) ;
	}

	if ( !empty ( $_REQUEST['id'] ) ) { ?>

		<script>document.getElementById('inputDescripcion').focus() ;</script>

		<?php
		$id_producto = $_REQUEST['id'] ;
		$v->result = $p->obtenerProducto ( $id_producto ) ;

		if ( $v->result['id_categoria'] == 1 ) 
			$header = '../controllers/lista-plomeria.php' ;

		if ( $v->result['id_categoria'] == 2 ) 
			$header = '../controllers/lista-pintureria.php' ;

		if ( $v->result['id_categoria'] == 3 ) 
			$header = '../controllers/lista-electricidad.php' ;

		if ( $v->result['id_categoria'] == 4 ) {
			$producto = substr ( $v->result['descripcion'] , 0 , 1 ) ; 
			if ( $producto == 'b' )  
				$header = '../controllers/lista-ferreteria.php?producto=Bulones' ;
			if ( $producto == 'm' )
				$header = '../controllers/lista-ferreteria.php?producto=Mechas' ;
			if ( $producto == 'v' )
				$header = '../controllers/lista-ferreteria.php?producto=Varillas' ;
		}

		if ( $v->result['id_categoria'] == 5 ) {
			$producto = substr ( $v->result['descripcion'] , 0 , 1 ) ; 
			if ( $producto == 'f' )  
				$header = '../controllers/lista-sanitarios.php?producto=Flexibles' ;
			if ( $producto == 'c' )
				$header = '../controllers/lista-sanitarios.php?producto=Canillas' ;
			if ( $producto == 'l' )
				$header = '../controllers/lista-sanitarios.php?producto=Llaves-de-paso' ;
		}

		if ( isset ( $_POST['aceptar'] ) ) {

			$p->EditarProducto ( $id_producto , $_POST['descripcion'] , $_POST['medida'] , $_POST['precio'] ) ;
			header ( 'Location: '.$header ) ;
		}
		
		$v->render() ;
		exit() ;
	}

	$v->render() ;

?>
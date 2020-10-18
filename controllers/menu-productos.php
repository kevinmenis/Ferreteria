<!--  ../controllers/menu-productos.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuProductos.php' ;

	$v = new MenuProductos ;

	$v->render() ;

?>
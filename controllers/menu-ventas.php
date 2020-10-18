<!--  ../controllers/menu-ventas.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuVentas.php' ;


	$v = new MenuVentas ;
	$v->render() ;

?>
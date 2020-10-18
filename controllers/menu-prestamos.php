<!--  ../controllers/menu-prestamos.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuPrestamos.php' ;


	$v = new MenuPrestamos ;

	$v->render() ;

?>
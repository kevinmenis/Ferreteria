<!--  ../controllers/menu-fiados.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuFiados.php' ;

	$m = new MenuFiados() ;
	$m->render() ;	

?>
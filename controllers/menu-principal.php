<!--  ../controllers/menu-principal.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuPrincipal.php' ;


	$v = new MenuPrincipal ;
	$v->render() ;

?>
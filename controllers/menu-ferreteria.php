<!--  ../controllers/menu-ferreteria.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuFerreteria.php' ;

	$v = new MenuFerreteria ;

	$v->render() ;

?>
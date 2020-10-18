<!--  ../controllers/menu-estadisticas.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuEstadisticas.php' ;


	$v = new MenuEstadisticas ;

	$v->render() ;

?>
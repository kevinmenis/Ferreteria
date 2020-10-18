<!--  ../controllers/menu-sanitarios.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/MenuSanitarios.php' ;

	$v = new MenuSanitarios ;

	$v->render() ;

?>
<!--  ../controllers/lista-prestamos.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../views/ListaPrestamos.php' ;
	require '../models/Prestamos.php' ;

	$p = new Prestamos ;
	$l = new ListaPrestamos ;

	$l->todos = $p->listaPrestamos() ;

	$l->render() ;

?>
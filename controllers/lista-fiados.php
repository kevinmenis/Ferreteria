<!--  ../controllers/lista-fiado.php  -->

<?php 

	require '../fw/fw.php' ;
	require '../models/Fiados.php' ;
	require '../views/ListaFiados.php' ;

	$f = new Fiados() ;
	$n = new ListaFiados() ;

	$n->todos = $f->ListaFiados() ;

	$n->render() ;


?>
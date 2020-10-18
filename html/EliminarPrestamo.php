<!--  ../html/EliminarPrestamo.php  -->

<?php 

	require '../html/MenuPrestamos.php' ;
	require '../html/Partials/Header.php' ;	

?>

		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 35rem;">
				<h4 class="card-header text-center">Eliminar prestamo</h4>
				<div class="card-body">
					<div class="card-text">
						<p>Cliente: <?= $this->result['nombre'] ?></p>
						<p>Fecha: <?= $this->result['fecha'] ?></p>
						<p>Descripcion: <?= $this->result['descripcion'] ?></p>
						<p>Cantidad: <?= $this->result['cantidad'] ?></p>
					</div>
					<h5>¿Estas seguro de eliminar este prestamo?</h5>
					<br/>
					<form action="" method="post">
					<div class="d-flex justify-content-center">					
						<input type="submit" name="aceptar" value="Aceptar" class="btn btn-block btn-outline-danger">
						<br/>
						<input type="submit" name="cancelar" value="Cancelar" class="btn btn-block btn-outline-danger">
					</div>
					</form>
				</div>
			</div>
		</div>
	<br/>

<?php 

	require '../html/Partials/Footer.php' ;	

?>
<!--  ../html/EditarPrestamo.php  -->

<?php 
	
	require '../html/MenuPrestamos.php' ;
	require '../html/Partials/Header.php' ;	

	$dia  = substr ( $this->result['fecha'] , 0 , 2 ) ;
	$mes  = substr ( $this->result['fecha'] , 3 , 2 ) ;
	$anio = substr ( $this->result['fecha'] , 6 , 4 ) ;									

?>
		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 70rem;">	
			<h4 class="card-header text-center">Editar prestamo</h4>	
				<div class="card-body">	
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
						<div class="p-2 bd-highlight">
							<form action="" method="post" style="width: 50rem;" onsubmit="return ValidarPrestamo();">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputFecha">Fecha: </label>
										<input type="date" name="fecha" value="<?= $anio ?>-<?= $mes ?>-<?= $dia ?>" id="inputFecha" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="inputCliente">Cliente</label>
										<input type="text" name="cliente" value="<?= $this->result['nombre'] ?>" id="inputCliente" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputDescripcion">Descripcion: </label>
										<input type="text" name="descripcion" value="<?= $this->result['descripcion'] ?>" id="inputDescripcion" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="inputCantidad">Cantidad: </label>
										<input type="text" name="cantidad" value="<?= $this->result['cantidad'] ?>" id="inputCantidad" class="form-control">
									</div>
								</div>									
								<div class="d-flex justify-content-center">
									<input type="submit" name="aceptar" value="Aceptar" class="btn btn-outline-primary btn-block">
									<br/>
									<a href="../controllers/lista-prestamos.php" class="btn btn-outline-primary btn-block">Cancelar</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
<?php 

	require '../html/Partials/Footer.php' ;	

?>
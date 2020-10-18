<!--  ../html/EditarFiado.php  -->

<?php 

	require '../html/MenuFiados.php' ;
	require '../html/Partials/Header.php' ;	

?>
		<?php 
				$dia  = substr ( $this->result['fecha'] , 0 , 2 ) ;
				$mes  = substr ( $this->result['fecha'] , 3 , 2 ) ;
				$anio = substr ( $this->result['fecha'] , 6 , 4 ) ;
		?>

		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 70rem;">	
			<h4 class="card-header text-center">Editar fiado</h4>	
				<div class="card-body">	
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
						<div class="p-2 bd-highlight">
							<form action="" method="post" style="width: 50rem;" onsubmit="return ValidarFiado();">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputCliente">Cliente</label>
										<input type="text" name="cliente" value="<?= $this->result['cliente'] ?>" id="inputCliente" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="inputFecha">Fecha</label>
										<input type="date" name="fecha" value="<?= $anio ?>-<?= $mes ?>-<?= $dia ?>" id="inputFecha" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDescripcion">Descripcion</label>
									<textarea name="descripcion" rows="10" cols="20" id="inputDescripcion" class="form-control"><?= $this->result['descripcion'] ?></textarea>
									<br/>
									<label for="inputTotal">Total</label>
									<input type="number" name="monto" placeholder="$0" value="<?= $this->result['monto'] ?>" id="inputTotal" class="form-control">
								</div>
								<div class="d-flex justify-content-center">
									<input type="submit" name="aceptar" value="Aceptar" class="btn btn-outline-primary btn-block">
									<br/>
									<a href="../controllers/lista-fiados.php" class="btn btn-outline-primary btn-block">Cancelar</a>
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
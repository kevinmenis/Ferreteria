<!--  ../html/ListaElectricidad.php  -->

<?php 

	require '../html/MenuProductos.php' ;
	require '../html/Partials/Header.php' ;	

?>
		<br/>
		<div class="d-flex justify-content-center">
			<div class="card" style="width: 69rem;">	
			<p class="card-header text-center h4">Caños de luz</p>
				<div class="card-body text-center">
					<div class="d-flex justify-content-end">
						<form action="" method="post" onsubmit="return ValidarCambiarPrecio();">
							<div class="form-row">
								<div class="col-auto">
									<label for="inputCambiarPrecio" class="col-form-label">Cabmbiar precio</label>
								</div>
								<div class="col-auto">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text">%</div>
										</div>
										<input type="number" name="cambiar-precio" id="inputCambiarPrecio" class="form-control">
									</div>
								</div>
								<div class="col-auto">
									<input type="submit" name="Aceptar" value="Aceptar" class="btn btn-outline-primary mb-2">
								</div>
							</div>
						</form>
					</div>
					<br/>
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
						<table class="table table-sm table-bordered table-hover" style="width: 45rem;">
							<tr>
								<thead class="thead-light">
									<th>Descripción</th>
									<th>Medida</th>
									<th>Precio</th>
									<th>Editar</th>
								</thead>
							</tr>
							<?php foreach ( $this->todos as $t ): ?>
								<tr>
									<tbody>
										<td><?= $t['descripcion'] ?></td> 
										<td><?= $t['medida'] ?></td> 
										<td>$<?= $t['precio_venta'] ?></td> 
										<td><a href="../controllers/editar-producto.php?id=<?= $t['id_producto'] ?>"><span class="icon-edit"></span></a></td>
									</tbody>
								</tr>	
							<?php endforeach ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br/>

<?php 

	require '../html/Partials/Footer.php' ;	

?>
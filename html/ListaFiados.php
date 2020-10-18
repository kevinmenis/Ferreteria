<!--  ../html/ListaFiados.php  -->

<?php 
	
	require '../html/Menuprincipal.php' ;
	require '../html/Partials/Header.php' ;	

?>
		<br/>
		<div class="d-flex justify-content-end">
			<a href="../controllers/nuevo-fiado.php" class="btn btn-success">Nuevo fiado <span class="icon-user-add"></span></a>
		</div>
		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 72rem;">	
			<h4 class="card-header text-center">Lista de fiados</h4>	
				<div class="card-body">	
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
						<div class="p-2 bd-highlight">
							<table class="table table-bordered table-hover table-sm text-center" style="width: 65rem;">
								<tr>
									<thead class="thead-light">				
										<th>Cliente</th>
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Total</th>
										<th>Editar</th>
										<th>Elimiar</th>				
									</thead>
								</tr>
								<?php foreach ( $this->todos as $t ): ?>
									<tbody>
										<tr>
											<td><?= $t['cliente'] ?></td>
											<td><?= $t['fecha'] ?></td>
											<td><textarea rows="3" cols="30" disabled=""><?= $t['descripcion'] ?></textarea></td>
											<td>$<?= $t['monto'] ?></td>
											<td>
												<a href="../controllers/editar-fiado.php?id=<?= $t['id_fiado'] ?>" class="d-flex justify-content-center"><span class="icon-edit" style="font-size: 24px;"></span></a>
											</td>	
											<td>
												<a href="../controllers/eliminar-fiado.php?id=<?= $t['id_fiado'] ?>" class="d-flex justify-content-center" style="color: #D84323;"><span class="icon-trash" style="font-size: 20px; color: #D84323;"></span></a>
											</td>
										</tr>
									</tbody>
								<?php endforeach ?>		
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		
<?php 

	require '../html/Partials/Footer.php' ;	

?>
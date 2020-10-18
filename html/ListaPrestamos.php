<!--  ../html/ListaPrestamos.php  -->

<?php 

	require '../html/MenuPrincipal.php' ;
	require '../html/Partials/Header.php' ;	

?>	
		<br/>
		<div class="d-flex justify-content-end">
			<a href="../controllers/nuevo-prestamo.php" class="btn btn-success">Nuevo prestamo <span class="icon-user-add"></span></a>
		</div>
		<br/>		
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 72rem;">	
			<h4 class="card-header text-center">Lista de prestamos</h4>	
				<div class="card-body">	
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
						<div class="p-2 bd-highlight">
							<table class="table table-bordered table-hover text-center" style="width: 65rem;">
								<tr>
									<thead class="thead-light">
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Cantidad</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</thead>
								</tr>
								<?php foreach ( $this->todos as $t ): ?>
									<tr> 
										<tbody>
											<td><?= $t['nombre'] ?></td>
											<td><?= $t['fecha'] ?></td>
											<td><?= $t['descripcion'] ?></td> 
											<td><?= $t['cantidad'] ?></td> 											 
											<td>
												<a href="../controllers/editar-prestamo.php?id=<?= $t['id_prestamo'] ?>" class="d-flex justify-content-center" style="font-size: 24px;"><span class="icon-edit"></span></a>							
											</td>
											<td>
												<a href="../controllers/eliminar-prestamo.php?id=<?= $t['id_prestamo'] ?>" class="d-flex justify-content-center" style="color: #D84323; font-size: 20px;"><span class="icon-trash"></span></a>
											</td>
										</tbody>
									</tr>
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
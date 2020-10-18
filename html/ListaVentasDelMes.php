<!--  ../html/ListaVentasDelMes.php  -->

<?php 

	require '../html/MenuVentas.php' ;
	require '../html/Partials/Header.php' ;
	require '../html/Form/ListaVentasDelMes.php' ;

?>		
		<?php 
			if ( !isset ( $_POST['mes'] ) ) { 

				$anio = date('Y') ;
				$nombreMes = $this->mes['nombre'] ;
			}
		?>

		<?php 
			if ( isset ( $_POST['mes'] ) ) {

				$anio = $_POST['anio'] ;
				$nombreMes = $this->mes['nombre'] ;
			}
		?>
		
		<div class="d-flex justify-content-center">
			<div class="card" style="width: 68rem;">
			<p class="card-header text-center h4"><?= $nombreMes ?> del <?= $anio ?></p>
				<div class="card-body text-center">
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
						<div class="p-2 bd-highlight">
							<table class="table table-sm table-bordered" style="width: 35rem;">
								<tr> 
									<thead class="thead-light">
										<th>Día</th> 
										<th>Venta</th> 
									</thead>
								</tr>
								<?php if ( !$this->lista ) { ?>
									<tr>
										<tbody class="text-muted font-italic"> 
											<td>NULL</td> 
											<td>NULL</td> 
										</tbody>
									</tr>		
								<?php } ?>	
								<?php if ( $this->lista ) { ?>
								<?php foreach ( $this->lista as $l ): ?>
									<tr>
										<tbody> 
											<td><?= $l['dia'] ?></td> 
											<td>$<?= $l['precio'] ?></td> 
										</tbody>
									</tr>		
								<?php endforeach ?>
								<?php } ?>								
							</table>
						</div>
						<div class="p-2 bd-highlight">
							<table class="table table-sm table-bordered" style="width: 17rem;">
								<tr>
									<thead class="thead-light">
										<th>Total</th>
									</thead>
									<?php if ( $this->total['precio'] == NULL ) { ?>
										<tbody class="text-muted font-italic">
											<td>NULL</td>
										</tbody>
									<?php } ?>
									<?php if ( $this->total['precio'] != NULL ) { ?>
										<tbody>
											<td>$<?= $this->total['precio'] ?></td>
										</tbody>
									<?php } ?>									
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	require '../html/Partials/Footer.php' ;

?>
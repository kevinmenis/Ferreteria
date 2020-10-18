<!--  ../html/ListaVentasDelAño.php  -->

<?php 

	require '../html/MenuVentas.php' ;
	require '../html/Form/ListaVentasDelAño.php' ;
	require '../html/Partials/Header.php' ;	

?>		
		<?php $i = 0 ; ?>
		<br/>
		<?php  
			if ( isset ( $_POST['anio'] ) ) 
				$anio = $_POST['anio'] ;

			if ( !isset ( $_POST['anio'] ) ) 
				$anio = date ('Y') ;
		?>
		
		<div class="d-flex justify-content-center">
			<div class="card" style="width: 68rem;">
			<p class="card-header text-center h4"><?= $anio ?></p>
				<div class="card-body text-center">
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
						<div class="p-2 bd-highlight">
							<table class="table table-sm table-bordered" style="width: 35rem;">
								<tr> 
									<thead class="thead-light">
										<th>#</th>
										<th>Mes</th> 
										<th>Total</th> 
									</thead>
								</tr>
								<?php if ( !$this->lista ) { ?>
									<tr>
										<tbody class="text-muted font-italic"> 
											<td></td>
											<td>NULL</td> 
											<td>NULL</td> 
										</tbody>
									</tr>		
								<?php } ?>
								<?php if ( $this->lista ) { ?>
								<?php foreach ( $this->lista as $l ): ?>
									<tr>
										<tbody> 
											<?php $i += 1 ?>
											<td><?= $i ?></td>
											<td><?= $l['Mes'] ?></td> 
											<td>$<?= $l['Total'] ?></td> 
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
<!--  ../html/ListaVentasDelDia.php  -->

<?php 

	require '../html/MenuVentas.php' ;
	require '../html/Form/ListaVentasDelDia.php' ;
	require '../html/Partials/Header.php' ;
 
?>
		<?php if ( !isset ( $_POST['fecha'] ) ) { 
			$fecha = date ('Y/m/d') ;
			$dia  = substr ( $fecha , 8 , 2 ) ;
			$mes  = substr ( $fecha , 5 , 2 ) ;
			$anio = substr ( $fecha , 0 , 4 ) ;
		} ?>

		<?php if ( isset ( $_POST['fecha'] ) ) { 
			$dia  = substr ( $_POST['fecha'] , 8 , 2 ) ;
			$mes  = substr ( $_POST['fecha'] , 5 , 2 ) ;
			$anio = substr ( $_POST['fecha'] , 0 , 4 ) ;
		} ?>

		<div class="d-flex justify-content-center">
			<div class="card" style="width: 69rem;">	
			<p class="card-header text-center h4"><?=$dia?>/<?=$mes?>/<?=$anio ?></p>
				<div class="card-body text-center">
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
						<div class="p-2 bd-highlight">
							<table class="table table-sm table-bordered" style="width: 35rem;">
								<thead class="thead-light">
									<tr>
										<th>#</th>
										<th>Ventas</th>
									</tr>
								</thead>
								<?php if ( !$this->lista ) { ?>
									<tbody class="font-italic text-muted">
										<tr>
											<td>NULL</td>
											<td>NULL</td>							
										</tr>
									</tbody>
								<?php } ?>
								<?php if ( $this->lista ) { ?>
								<?php foreach ( $this->lista as $l ) { ?>
									<tbody>
										<tr>
											<?php $i += 1 ?>
											<td><?= $i ?></td>
											<td>$<?= $l['precio'] ?></td>							
										</tr>
									</tbody>
								<?php } 
								} ?>
							</table>
						</div>
						<div class="p-2 bd-highlight">
							<table class="table table-sm table-bordered" style="width: 17rem;">
								<tr>
									<thead class="thead-light">
										<th>Total</th>
									</thead>
									<?php if ( $this->total['precio'] == NULL ) { ?>
									<tbody class="font-italic text-muted">
										<tr>
											<td>NULL</td>						
										</tr>
									</tbody>
									<?php } ?>
									<?php if ( $this->total['precio'] != NULL ) { ?>
										<tbody>
											<tr>
												<td>$<?= $this->total['precio'] ?></td>							
											</tr>
										</tbody>
									<?php } ?>
								</tr>
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
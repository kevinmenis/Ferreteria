<!--  ../html/EstadisticaAño.php  -->

<?php 
	
	require '../html/MenuEstadisticas.php' ;
	require '../html/Form/EstadisticaAño.php' ;
	require '../html/Partials/Header.php' ;	

	function NombreDia ( $fecha ) {

		$fechats = strtotime ( $fecha ) ;

		switch ( date ( 'w' , $fechats ) ) {
		    case 0: return "Domingo"   ; break ;
		    case 1: return "Lunes"     ; break ;
			case 2: return "Martes"    ; break ;
		    case 3: return "Miércoles" ; break ;
		    case 4: return "Jueves"    ; break ;
		    case 5: return "Viernes"   ; break ;
		    case 6: return "Sábado"    ; break ;
		}

	}

?>


<?php 
		$anioActual = date ('Y') ;

		if ( !isset ( $_POST['anio'] ) ) {
			$anio = date ('Y') ;

			$mesActual = date ('n') ;
			$promedio  = $this->totalAño['precio'] / $mesActual ;
		}

		if ( isset ( $_POST['anio'] ) ) {
			$anio = $_POST['anio'] ;

			if ( $anio < $anioActual ) 
				$promedio = $this->totalAño['precio'] / 12 ;
	
			if ( $anio == $anioActual ) {
				$mesActual = date ('n') ;
				$promedio  = $this->totalAño['precio'] / $mesActual ;
			}	
		}
	
?>

		<div class="d-flex justify-content-center">
			<div class="card" style="width: 68rem;">
			<p class="card-header text-center h4"><?= $anio ?></p>
				<div class="card-body text-center">
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
						<div class="p-2 bd-highlight">	
							<?php if ( $this->totalAño['precio'] ): ?>
							<table class="table table-sm table-bordered" style="width: 35rem;">
								<tr>
									<thead class="thead-light">
										<th colspan="2">Total</th>
									</thead>
									<tbody>
										<td colspan="2">$<?= $this->totalAño['precio'] ?></td>
									</tbody>
								</tr>
								<tr>
									<thead class="thead-light">
										<th colspan="2">Promedio</th>
									</thead>
									<tbody>
										<td colspan="2">$<?= round ( $promedio ) ?></td>
									</tbody>
								</tr>								
								<tr>
									<thead class="thead-light">
										<th colspan="2">Mes menos vendido</th>
									</thead>
									<tbody>
										<td><?= $this->mesMin['nombre'] ?></td>
										<td>$<?= $this->mesMin['total'] ?></td>
									</tbody>
								</tr>
								<tr>									
									<thead class="thead-light">
										<th colspan="2">Mes más vendido</th>
									</thead>
									<tbody>
										<td><?= $this->mesMax['nombre'] ?></td>
										<td>$<?= $this->mesMax['total'] ?></td>
									</tbody>
								</tr>
								<tr>
									<thead class="thead-light">
										<th colspan="2">Venta record</th>
									</thead>
									<tbody>
										<td><?= NombreDia ( $this->record['fecha'] ) ?> <?= $this->record['fechaRecord'] ?> <?= $this->record['mes'] ?></td>
										<td>$<?= $this->record['precio'] ?></td>
									</tbody>
								</tr>
							</table>
							<?php endif ?>
							<?php if ( !$this->totalAño['precio'] ): ?>
							<table class="table table-sm table-bordered" style="width: 35rem;">
									<tr>
										<thead class="thead-light">
											<th colspan="2">Total</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td colspan="2">NULL</td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Promedio</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td colspan="2">NULL</td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Mes menos vendido</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td>NULL</td>
											<td>NULL</td>
										</tbody>
									</tr>
									<tr>									
										<thead class="thead-light">
											<th colspan="2">Mes más vendido</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td>NULL</td>
											<td>NULL</td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Venta record</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td>NULL</td>
											<td>NULL</td>
										</tbody>
									</tr>
								</table>	
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	require '../html/Partials/Header.php' ;	

?>
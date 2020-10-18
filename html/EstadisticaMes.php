<!-- ../html/EstadisticaMes.php -->

<?php 
		require '../html/MenuEstadisticas.php' ;
		require '../html/Form/EstadisticaMes.php' ;
		require '../html/Partials/Header.php' ;

		/*  OBTENER NOMBRE DEL DIA  */
		function NombreDia ( $fecha ) {
		$fechats = strtotime ( $fecha ) ;
		//el parametro w en la funcion date indica que queremos el dia de la semana
		//lo devuelve en numero 0 domingo , 1 lunes , ...
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
			$DiaMin  = substr ( $this->diaMin['fecha'] , 8 , 2 ) ;
			$DiaMax  = substr ( $this->diaMax['fecha'] , 8 , 2 ) ;
			$anio = date ('Y') ;
			$mesAcutal = date ('n') ;
			$anioActual = date ('Y') ;
			$cantDias = date ('t') ;

			if ( isset ( $_POST['anio'] ) ) 
				$anio = $_POST['anio'] ;

			$cont = 0 ;
			foreach ( $this->lista as $l ): 
				$cont += 1 ;
			endforeach 
		?>
			<div class="d-flex justify-content-center">
				<div class="card" style="width: 68rem;">
				<p class="card-header text-center h4"><?= $this->nombreMes['nombre'] ?> del <?= $anio ?></p>
					<div class="card-body text-center">
						<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
							<div class="p-2 bd-highlight">
								<?php if ( !$this->totalMes['precio'] ): ?>
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
											<th colspan="2">Venta minima</th>
										</thead>
										<tbody class="text-muted font-italic">
											<td>NULL</td>
											<td>NULL</td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Venta maxima</th>
										</thead>
										<tbody class="text-muted font-italic">	
											<td>NULL</td>
											<td>NULL</td>
										</tbody>
									</tr>
								</table>
								<?php endif ?>
								<?php if ( $this->totalMes['precio'] ): ?>
								<table class="table table-sm table-bordered" style="width: 35rem;">
									<tr>
										<thead class="thead-light">
											<th colspan="2">Total</th>
										</thead>
										<tbody>
											<td colspan="2">$<?= $this->totalMes['precio'] ?></td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Promedio</th>
										</thead>
										<tbody>
											<td colspan="2">$<?= round ( $this->totalMes['precio'] / $cont ) ?></td>
										</tbody>
									</tr>
									<?php if ( !isset ( $_POST['mes'] ) ): ?>									
										<?php $promedio = round ( $this->totalMes['precio'] / $cont ) ; ?>
										<tr>
											<thead class="thead-light">
												<th colspan="2">Proyección del mes</th>
											</thead>
											<tbody>
												<td colspan="2">$<?= $promedio * 30 ?></td>
											</tbody>
										</tr>
									<?php endif ?>
									<?php if ( isset ( $_POST['mes'] ) ): ?>									
										<?php if ( $_POST['mes'] == $mesAcutal && $_POST['anio'] == $anioActual ): ?>
											<?php $promedio = round ( $this->totalMes['precio'] / $cont ) ; ?>
											<tr>
												<thead class="thead-light">
													<th colspan="2">Proyección del mes</th>
												</thead>
												<tbody>
													<td colspan="2">$<?= $promedio * $cantDias ?></td>
												</tbody>
											</tr>
										<?php endif ?>
									<?php endif ?>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Venta minima</th>
										</thead>
										<tbody>
											<td><?= NombreDia ( $this->diaMin['fecha'] ) ?> <?= $DiaMin ?></td>
											<td>$<?= $this->diaMin['precio'] ?></td>
										</tbody>
									</tr>
									<tr>
										<thead class="thead-light">
											<th colspan="2">Venta maxima</th>
										</thead>
										<tbody>	
											<td><?= NombreDia ( $this->diaMax['fecha'] ) ?> <?= $DiaMax ?></td>
											<td>$<?= $this->diaMax['precio'] ?></td>
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

	require '../html/Partials/Footer.php' ;	

?>
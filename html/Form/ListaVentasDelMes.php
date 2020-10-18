<?php 

	require '../html/Partials/Header.php' ;

?>
		<?php 
			$anioActual = date ('Y') ;
		?>
		<br/> 
		<div class="d-flex justify-content-between d-flex flex-row bd-highlight mb-3">
			<div class="p-2 bd-highlight">
				<p class="h3">Ventas del mes </p>
			</div>
			<div class="p-2 bd-highlight">
				<form action="" method="post" class="form-inline">
					<div class="form-group mb-2">
						<select name="mes" class="form-control">
							<option value="1">Enero</option>
							<option value="2">Febrero</option>
							<option value="3">Marzo</option>
							<option value="4">Abril</option>
							<option value="5">Mayo</option>
							<option value="6">Junio</option>
							<option value="7">Julio</option>
							<option value="8">Agosto</option>
							<option value="9">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</div>
					<div class="form-group mb-2">
						<select name="anio" class="form-control">
						<?php for ( $i = 2019 ; $i < $anioActual + 10 ; $i++ ) { ?>					
								<option value="<?= $i ?>"><?= $i ?></option>				
						<?php } ?> 
						</select>
					</div>
					<input type="submit" value="Buscar" class="btn btn-outline-primary mb-2">
				</form>
			</div>
		</div>

<?php 

	require '../html/Partials/Footer.php' ;

?>
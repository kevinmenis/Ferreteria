<?php 

	require '../html/Partials/Header.php' ;

?>

		<?php 
			$dia  = date ('d') ;
			$mes  = date ('m') ;
			$anio = date ('Y') ;
			$i = 0 ;
		?>
		<br/>
		<div class="d-flex justify-content-between d-flex flex-row bd-highlight mb-3">
			<div class="p-2 bd-highlight">
				<p class="h3">Historial de ventas</p>
			</div>
			<div class="p-2 bd-highlight">
				<form action="" method="post" class="form-inline">				
					<div class="form-group mb-2">
						<label for="inputFecha" class="col-sm-2 col-form-label">Fecha</label>
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<input type="date" name="fecha" value="<?= $anio ?>-<?= $mes ?>-<?= $dia ?>" class="form-control" id="inputFecha">
					</div>
					<input type="submit" value="Buscar" class="btn btn-outline-primary mb-2">			
				</form>
			</div>			
		</div>

<?php 

	require '../html/Partials/Footer.php' ;

?>
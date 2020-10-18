<?php 

	require '../html/Partials/Header.php' ;

?>		
		<?php 
			$anioActual = date ('Y') ;
		?>
		<br/>
		<div class="d-flex justify-content-between d-flex flex-row bd-highlight mb-3">
			<div class="p-2 bd-highlight">
				<p class="h3">Estadísticas del año</p>
			</div>
			<div class="p-2 bd-highlight">
				<form action="" method="post" class="form-inline">
					<div class="form-group mb-2">
						<label for="inputAño">Año</label>
					</div>
					<div class="form-group mb-2">
						<select name="anio" id="inputAño" class="form-control">				
							<?php for ( $anio = 2019 ; $anio < $anioActual + 10 ; $anio++ ) { ?>					
								<option value="<?= $anio ?>"><?= $anio ?></option>
							<?php } ?>
						</select>						
					</div>
					<input type="submit" value="buscar" class="btn btn-outline-primary mb-2">			
				</form>
			</div>
		</div>
<?php 

	require '../html/Partials/Footer.php' ;

?>
<!--  ../html/EditarProducto.php  -->

<?php 
	
	require '../html/MenuProductos.php' ;
	require '../html/Partials/Header.php' ;	

	if ( $this->result['id_categoria'] == 1 ) 
		$header = '../controllers/lista-plomeria.php' ;

	if ( $this->result['id_categoria'] == 2 ) 
		$header = '../controllers/lista-pintureria.php' ;

	if ( $this->result['id_categoria'] == 3 ) 
		$header = '../controllers/lista-electricidad.php' ;

	if ( $this->result['id_categoria'] == 4 ) {
		$producto = substr ( $this->result['descripcion'] , 0 , 1 ) ; 
		if ( $producto == 'b' )  
			$header = '../controllers/lista-ferreteria.php?producto=Bulones' ;
		if ( $producto == 'm' )
			$header = '../controllers/lista-ferreteria.php?producto=Mechas' ;
		if ( $producto == 'v' )
			$header = '../controllers/lista-ferreteria.php?producto=Varillas' ;	
	}

	if ( $this->result['id_categoria'] == 5 ) {
		$producto = substr ( $this->result['descripcion'] , 0 , 1 ) ; 
		if ( $producto == 'f' )  
			$header = '../controllers/lista-sanitarios.php?producto=Flexibles' ;
		if ( $producto == 'c' )
			$header = '../controllers/lista-sanitarios.php?producto=Canillas' ;
		if ( $producto == 'l' )
			$header = '../controllers/lista-sanitarios.php?producto=Llaves-de-paso' ;
	}
 
?>

		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card" style="width: 70rem;">	
			<h4 class="card-header text-center">Editar producto</h4>	
				<div class="card-body">	
					<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
						<form action="" method="post" style="width: 50rem;" onsubmit="return ValidarProducto();">
							<div class="form-group row">
							<label for="inputDescripcion" class="col-sm-2 col-form-label">Descripcion</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputDescripcion" name="descripcion" value="<?= $this->result['descripcion'] ?>">
								</div>
							</div>
							<div class="form-group row">
							<label for="inputMedida" class="col-sm-2 col-form-label">Medida</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputMedida" name="medida" value="<?= $this->result['medida'] ?>">
								</div>
							</div>		
							<div class="form-group row">
							<label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputPrecio" name="precio" value="<?= $this->result['precio_venta'] ?>">
								</div>
							</div>						
							<div class="d-flex justify-content-center">
								<input type="submit" name="aceptar" value="Aceptar" class="btn btn-outline-primary btn-block">
								<br/>
								<a href="<?= $header ?>" class="btn btn-outline-primary btn-block">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br/>


<?php 

	require '../html/Partials/Footer.php' ;	

?>


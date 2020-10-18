
function ValidarNumero(x) {

	if ( /^[0-9]*$/.test(x) ) 
		return true ;
	else 
		return false ;
}

function ValidarTexto(x) {

	if ( x.search(/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/) ) 
		return false ;	
	else 
		return true ;	
}


function ValidarPrestamo() {

	var inputFecha , inputCliente , inputDescripcion , inputCantidad , fecha , cliente , desc , cant ;

	inputFecha = document.getElementById('inputFecha').value ;
	inputCliente = document.getElementById('inputCliente').value ;
	inputDescripcion = document.getElementById('inputDescripcion').value ;
	inputCantidad = document.getElementById('inputCantidad').value ; 

	if ( inputFecha == '' || inputFecha.length > 10 ) {
		document.getElementById('inputFecha').className += ' is-invalid' ;
		fecha = 1 ;
	} else 
		document.getElementById('inputFecha').className = 'form-control is-valid' ;

	if ( inputCliente == '' || inputCliente.length > 30 || ValidarTexto(inputCliente) == false ) {
		document.getElementById('inputCliente').className += ' is-invalid' ;
		cliente = 1 ;
	} else
		document.getElementById('inputCliente').className = 'form-control is-valid' ;

	if ( inputDescripcion == '' ) {
		document.getElementById('inputDescripcion').className += ' is-invalid' ;
		desc = 1 ;
	} else
		document.getElementById('inputDescripcion').className = 'form-control is-valid' ;

	if ( inputCantidad == '' || inputCantidad.length > 3 || ValidarNumero(inputCantidad) == false ) {
		document.getElementById('inputCantidad').className += ' is-invalid' ;

		cant = 1 ;
	} else
		document.getElementById('inputCantidad').className = 'form-control is-valid' ;

	if ( fecha == 1 ) {
		document.getElementById('inputFecha').focus() ;
		return false ;
	}

	if ( cliente == 1 ) {
		document.getElementById('inputCliente').focus() ;
		return false ;
	}

	if ( desc == 1 ) {
		document.getElementById('inputDescripcion').focus() ;
		return false ;
	}

	if ( cant == 1 ) {
		document.getElementById('inputCantidad').focus() ;
		return false ;
	}
	
	return true ;	
}


function ValidarFiado() {

	var inputFecha , inputCliente , inputDescripcion , inputTotal , fecha , cliente , desc , total ;

	inputFecha = document.getElementById('inputFecha').value ;
	inputCliente = document.getElementById('inputCliente').value ;
	inputDescripcion = document.getElementById('inputDescripcion').value ;
	inputTotal = document.getElementById('inputTotal').value ; 

	if ( inputFecha == '' || inputFecha.length > 10 ) {
		document.getElementById('inputFecha').className += ' is-invalid' ;
		fecha = 1 ;
	} else 
		document.getElementById('inputFecha').className = 'form-control is-valid' ;

	if ( inputCliente == '' || inputCliente.length > 30 || ValidarTexto(inputCliente) == false ) {
		document.getElementById('inputCliente').className += ' is-invalid' ;
		cliente = 1 ;
	} else
		document.getElementById('inputCliente').className = 'form-control is-valid' ;

	if ( inputDescripcion == '' ) {
		document.getElementById('inputDescripcion').className += ' is-invalid' ;
		desc = 1 ;
	} else
		document.getElementById('inputDescripcion').className = 'form-control is-valid' ;

	if ( inputTotal == '' || inputTotal.length > 6 || ValidarNumero(inputTotal) == false ) {
		document.getElementById('inputTotal').className += ' is-invalid' ;
		total = 1 ;
	} else
		document.getElementById('inputTotal').className = 'form-control is-valid' ;

	if ( fecha == 1 ) {
		document.getElementById('inputFecha').focus() ;
		return false ;
	}

	if ( cliente == 1 ) {
		document.getElementById('inputCliente').focus() ;
		return false ;
	}

	if ( desc == 1 ) {
		document.getElementById('inputDescripcion').focus() ;
		return false ;
	}

	if ( total == 1 ) {
		document.getElementById('inputTotal').focus() ;
		return false ;
	}
	
	return true ;	
}


function ValidarProducto() {

	var inputDescripcion , inputMedida , inputPrecio , desc , medida , precio ;

	inputDescripcion = document.getElementById('inputDescripcion').value ;
	inputMedida = document.getElementById('inputMedida').value ;
	inputPrecio = document.getElementById('inputPrecio').value ;

	if ( inputDescripcion == '' || inputDescripcion.length > 30 || ValidarTexto(inputDescripcion) == false ) {
		document.getElementById('inputDescripcion').className += ' is-invalid' ;
		desc = 1 ;
	} else 
		document.getElementById('inputDescripcion').className = 'form-control is-valid' ;

	if ( inputMedida == '' || inputMedida.length > 11 ) {
		document.getElementById('inputMedida').className += ' is-invalid' ;
		medida = 1 ;
	} else
		document.getElementById('inputMedida').className = 'form-control is-valid' ;

	if ( inputPrecio == '' || inputPrecio.length > 11 || ValidarNumero(inputPrecio) == false ) {
		document.getElementById('inputPrecio').className += ' is-invalid' ;
		precio = 1 ;
	} else
		document.getElementById('inputPrecio').className = 'form-control is-valid' ;

	if ( desc == 1 ) {
		document.getElementById('inputDescripcion').focus() ;
		return false ;
	}

	if ( medida == 1 ) {
		document.getElementById('inputMedida').focus() ;
		return false ;
	}

	if ( precio == 1 ) {
		document.getElementById('inputPrecio').focus() ;
		return false ;
	}
	
	return true ;
}


function ValidarVenta() {

	var venta , v ;

	venta = document.getElementById('venta').value ;

	if ( venta == '' || venta.length > 5 || venta == 0 || ValidarNumero(venta) == false ) {
		document.getElementById('venta').className += ' is-invalid' ;
		v = 1 ;
	} else {
		document.getElementById('venta').className = 'form-control is-valid' ;
		return true ;
	}

	if ( v = 1 ) {
		document.getElementById('venta').focus() ;
		return false ;
	}

	return true ;	
}


function ValidarCambiarPrecio() {

	var aumento , a ;

	aumento = document.getElementById('cambiar-precio').value ;

	if ( aumento == '' || aumento.length > 3 || aumento == 0 || ValidarNumero(aumento) == false ) {
		document.getElementById('cambiar-precio').className += ' is-invalid' ;
		a = 1 ;
	} else {
		document.getElementById('cambiar-precio').className = 'form-control is-valid' ;
		return true ;
	}

	if ( a = 1 ) {
		document.getElementById('cambiar-precio').focus() ;
		return false ;
	}	

	return true ;
}
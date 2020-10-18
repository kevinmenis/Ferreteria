<!--  ../models/Productos.php  -->

<?php 


class Productos extends Model {

	public function ListaProductos ( $param1 , $param2 , $param3 ) {

		$this->db->query ( "SELECT * 
							FROM   productos
							WHERE  descripcion = '$param1'
							OR     descripcion = '$param2'
							OR     descripcion = '$param3'
							ORDER BY id_producto ASC" ) ;

		return $this->db->fetchAll() ;
	}


	public function ListaProductosTodos ( $categoria ) {

		$this->db->query ( "SELECT *
							FROM   productos
							WHERE  id_categoria = '$categoria'
							ORDER BY descripcion , id_producto ASC" ) ;

		return $this->db->fetchAll() ;
	}	


	public function ObtenerProducto ( $id_producto ) {

		$this->db->query ( "SELECT *
							FROM   productos
							WHERE  id_producto = '$id_producto'" ) ;

		return $this->db->fetch() ;
	}


	public function EditarProducto ( $id_producto , $descripcion , $medida , $precio_venta ) {

		$this->db->query ( "UPDATE productos
							SET    descripcion = '$descripcion' , medida = '$medida' , precio_venta = '$precio_venta' 
							WHERE  id_producto = '$id_producto'" ) ;
	}

	// CAMBIAR PRECIO DE PLOMERIA - PINTURAS - ELECTRICIDAD 
	public function CambiarPrecio ( $categoria , $porciento ) {

		$this->db->query ( "UPDATE productos
							SET    precio_venta = precio_venta + ( precio_venta * '$porciento' / 100 )
							WHERE  id_categoria = '$categoria'" ) ;
	}

	// CAMBIAR PRECIO DE SANITARIOS - FERRETERIA
	public function CambiarPrecio2 ( $param1 , $param2 , $param3 , $porciento ) {

		$this->db->query ( "UPDATE productos
							SET    precio_venta = precio_venta + ( precio_venta * '$porciento' / 100 )
							WHERE  descripcion = '$param1'
							OR     descripcion = '$param2'
							OR     descripcion = '$param3'" ) ;
	}

}



?>
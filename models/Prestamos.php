<!--  ../models/Prestamos.php -->

<?php 

	class Prestamos extends Model {

		public function listaPrestamos() {

			$this->db->query ( "SELECT   id_prestamo , DATE_FORMAT ( fecha , '%d/%m/%Y' ) fecha , nombre , cantidad , descripcion
								FROM     prestamos
								ORDER BY nombre ASC" ) ;

			return $this->db->fetchAll() ;

		}


		public function nuevoPrestamo ( $nombre , $descripcion , $cantidad , $fecha ) {

			$this->db->query ( "INSERT INTO prestamos
							   ( nombre , descripcion , cantidad , fecha )
							   VALUES 
							   ( '$nombre' , '$descripcion' , '$cantidad' , '$fecha' )" ) ;

		}


		public function BuscarPrestamo ( $id_prestamo ) {

			$this->db->query ( "SELECT id_prestamo , nombre , descripcion , cantidad , DATE_FORMAT(fecha , '%d/%m/%Y') fecha
							    FROM   prestamos  
								WHERE  id_prestamo = '$id_prestamo'" ) ;

			return $this->db->fetch() ;

		}


		public function EliminarPrestamo ( $id_prestamo ) {

			$this->db->query ( "DELETE FROM prestamos
								WHERE       id_prestamo = '$id_prestamo'" ) ;
		}


		public function EditarPrestamo ( $id_prestamo , $nombre , $descripcion , $cantidad , $fecha ) {

			$this->db->query ( "UPDATE prestamos 
								SET    nombre = '$nombre' , descripcion = '$descripcion' , cantidad = '$cantidad' , fecha = '$fecha' 
								WHERE  id_prestamo = '$id_prestamo'" ) ;

		}


		public function ValidarPrestamo ( $nombre ) {

			$this->db->query ( "SELECT *
								FROM   prestamos
								WHERE  nombre = '$nombre'" ) ;

			if ( $this->db->numRows() == 1 )
				return true ;
			else 
				return false ;
		}



	}

?>
<!--  ../models/Fiados.php -->

<?php 

	class Fiados extends Model {

		public function ListaFiados() {

			$this->db->query ( "SELECT   id_fiado , DATE_FORMAT ( fecha , '%d/%m/%Y' ) fecha , cliente , descripcion , monto
								FROM     fiados
								ORDER BY cliente ASC" ) ;

			return $this->db->fetchAll() ;
		}


		public function NuevoFiado ( $fecha , $cliente , $desc , $monto ) {

			$this->db->query ( "INSERT INTO fiados
								( fecha , cliente , descripcion , monto )
								VALUES
								( '$fecha' , '$cliente' , '$desc' , '$monto' )" ) ;
		}


		public function BuscarFiado ( $id_fiado ) {

			$this->db->query ( "SELECT id_fiado , DATE_FORMAT(fecha , '%d/%m/%Y') fecha , cliente , descripcion , monto 
							    FROM   fiados  
								WHERE  id_fiado = '$id_fiado'" ) ;

			return $this->db->fetch() ;
		}


		public function EliminarFiado ( $id_fiado ) {

			$this->db->query ( "DELETE FROM fiados
								WHERE id_fiado = '$id_fiado'" ) ;
		}


		public function EditarFiado ( $id_fiado , $fecha , $cliente , $descripcion , $monto ) {

			$this->db->query ( "UPDATE fiados
								SET    fecha = '$fecha' , cliente = '$cliente' , descripcion = '$descripcion' , monto = '$monto'
								WHERE  id_fiado = '$id_fiado'" ) ;
		}


	}

?>
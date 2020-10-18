<!-- ../models/Ventas.php -->

<?php 

class Ventas extends Model {



	/*                                               *
	*                                                *
	*                                                *
	*		FUNCIONES PARA ESTADISTICA DEL MES       *
	*                                                *
	*                                                *
	*                                                */ 



	public function totalMes ( $mes , $anio ) {

		/*  VALIDACION DEL MES  */
		if ( $mes <= 0 ) die('ERROR1');
		if ( $mes > 12 ) die('ERROR2');
		if ( strlen($mes) < 1 || strlen($mes) > 2 ) die('ERROR3');
		if ( !is_numeric($mes) ) die('ERROR4');

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR-1');
		if ( strlen($anio) != 4 ) die('ERROR-2');
		if ( !is_numeric($anio) ) die('ERROR-3');

		$this->db->query ( "SELECT SUM(precio) AS precio
						    FROM   ventas
						    WHERE  MONTH (fecha) = '$mes' 
						    AND    YEAR  (fecha) = '$anio'" ) ;

		return $this->db->fetch() ;
	}


	public function diaMax ( $mes , $anio ) {

		/*  VALIDACION DEL MES  */
		if ( $mes <= 0 ) die('ERROR1');
		if ( $mes > 12 ) die('ERROR2');
		if ( strlen($mes) < 1 || strlen($mes) > 2 ) die('ERROR3');
		if ( !is_numeric($mes) ) die('ERROR4');

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR-1');
		if ( strlen($anio) != 4 ) die('ERROR-2');
		if ( !is_numeric($anio) ) die('ERROR-3');

		$this->db->query ( "SELECT   id_venta , SUM(precio) precio , fecha 
							FROM     ventas
							WHERE    MONTH (fecha) = '$mes'
							AND      YEAR  (fecha) = '$anio'
							GROUP BY DAY   (fecha)
							ORDER BY precio DESC
							LIMIT    1" ) ;

		return $this->db->fetch() ;
	}


	public function diaMin ( $mes , $anio ) {

		/*  VALIDACION DEL MES  */
		if ( $mes <= 0 ) die('ERROR1');
		if ( $mes > 12 ) die('ERROR2');
		if ( strlen($mes) < 1 || strlen($mes) > 2 ) die('ERROR3');
		if ( !is_numeric($mes) ) die('ERROR4');

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR-1');
		if ( strlen($anio) != 4 ) die('ERROR-2');
		if ( !is_numeric($anio) ) die('ERROR-3');

		$this->db->query ( "SELECT   id_venta , SUM(precio) precio , fecha 
							FROM     ventas
							WHERE    MONTH (fecha) = '$mes'
							AND      YEAR  (fecha) = '$anio'
							GROUP BY DAY   (fecha)
							ORDER BY precio ASC
							LIMIT    1" ) ;

		return $this->db->fetch() ;
	}


	public function promedioDia ( $mes , $anio ) {

		/*  VALIDACION DEL MES  */
		if ( $mes <= 0 ) die('ERROR1');
		if ( $mes > 12 ) die('ERROR2');
		if ( strlen($mes) < 1 || strlen($mes) > 2 ) die('ERROR3');
		if ( !is_numeric($mes) ) die('ERROR4');

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR-1');
		if ( strlen($anio) != 4 ) die('ERROR-2');
		if ( !is_numeric($anio) ) die('ERROR-3');

		$this->db->query ( "SELECT ROUND ( AVG(precio) ) AS Promedio
							FROM   ventas
							WHERE  MONTH (fecha) = '$mes' 
							AND    YEAR  (fecha) = '$anio'" ) ;

		return $this->db->fetch() ;
	}



	/*                                               *
	*                                                *
	*                                                *
	*		FUNCIONES PARA ESTADISTICA DEL AÑO       *
	*                                                *
	*                                                *
	*                                                */



	public function totalAño ( $anio ) {

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR 1');
		if ( strlen($anio) != 4 ) die('ERROR 2');
		if ( !is_numeric($anio) ) die('ERROR 3');

		$this->db->query ( "SELECT SUM(precio) AS precio
							FROM  ventas
							WHERE YEAR(fecha) = '$anio'" ) ;

		return $this->db->fetch() ;

	}


	public function mesMin ( $anio ) {

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR 1');
		if ( strlen($anio) != 4 ) die('ERROR 2');
		if ( !is_numeric($anio) ) die('ERROR 3');

		$this->db->query ( "SELECT   MONTH (v.fecha) AS mes , m.nombre , SUM(v.precio) AS total
							FROM     ventas v , meses m
							WHERE    MONTH (v.fecha) = m.numero
							AND      YEAR  (v.fecha) = '$anio'
							GROUP BY mes
							ORDER BY total ASC
							LIMIT    1" ) ;

		return $this->db->fetch() ;
	}


	public function mesMax ( $anio ) {

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR 1');
		if ( strlen($anio) != 4 ) die('ERROR 2');
		if ( !is_numeric($anio) ) die('ERROR 3');

		$this->db->query ( "SELECT   MONTH (v.fecha) AS mes , m.nombre , SUM(v.precio) AS total
							FROM     ventas v , meses m
							WHERE    MONTH (v.fecha) = m.numero
							AND      YEAR  (v.fecha) = '$anio'
							GROUP BY mes
							ORDER BY total DESC
							LIMIT    1" ) ;

		return $this->db->fetch() ;
	}


	public function VentaRecord ( $anio ) {

		$this->db->query ( "SELECT v.fecha , SUM(v.precio) precio , DATE_FORMAT(v.fecha,'%d') fechaRecord , m.nombre mes
							FROM   ventas v , meses m
							WHERE  YEAR(v.fecha) = '2020'
							AND    MONTH (v.fecha) = m.numero
							GROUP BY DAY(v.fecha) , MONTH(v.fecha)
							ORDER BY v.precio DESC
							LIMIT 1" ) ;

		return $this->db->fetch() ;
	}



	/*                                                 *
	*                                                  *
	*                                                  *
	*		   FUNCIONES PARA VENTAS DEL AÑO           *
	*                                                  *
	*                                                  *
	*                                                  */ 



	public function ListaVentasDelAnio ( $anio ) {

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR 1');
		if ( strlen($anio) != 4 ) die('ERROR 2');
		if ( !is_numeric($anio) ) die('ERROR 3');

		$this->db->query ( "SELECT   m.nombre Mes , SUM(v.precio) Total 
							FROM     ventas v , meses m
							WHERE    YEAR (v.fecha) = '$anio'
							AND      MONTH(v.fecha) = m.numero
							GROUP BY Mes
							ORDER BY m.numero ASC" ) ;

		return $this->db->fetchAll() ;
	}



	/*                                                 *
	*                                                  *
	*                                                  *
	*	  	  FUNCIONES PARA VENTAS DEL MES            *
	*                                                  *
	*                                                  *
	*                                                  */ 


	public function ListaVentasDelMes ( $mes , $anio ) {

		/*  VALIDACION DEL MES  */
		if ( $mes <= 0 ) die('ERROR1');
		if ( $mes > 12 ) die('ERROR2');
		if ( strlen($mes) < 1 || strlen($mes) > 2 ) die('ERROR3');
		if ( !is_numeric($mes) ) die('ERROR4');

		/*  VALIDACION DEL AÑO  */
		if ( $anio < 2019 ) die('ERROR-1');
		if ( strlen($anio) != 4 ) die('ERROR-2');
		if ( !is_numeric($anio) ) die('ERROR-3');

		$this->db->query ( "SELECT   DAY(fecha) dia , SUM(precio) precio 
							FROM     ventas 
							WHERE    YEAR (fecha) = '$anio'
							AND      MONTH(fecha) = '$mes'
							GROUP BY dia
							ORDER BY fecha ASC" ) ;

		return $this->db->fetchAll() ;
	}



	/*                                                 *
	*                                                  *
	*                                                  *
	*	  	  FUNCIONES PARA VENTAS DEL DIA            *
	*                                                  *
	*                                                  *
	*                                                  */



	public function ListaVentasDelDia ( $fecha ) {

		$this->db->query ( "SELECT * 
							FROM   ventas
							WHERE  fecha = '$fecha'" ) ;

		return $this->db->fetchAll() ;
	}


	public function TotalDia ( $fecha ) { 

		$this->db->query ( "SELECT SUM(precio) precio
							FROM   ventas
							WHERE  fecha = '$fecha'" ) ;

		return $this->db->fetch() ;
	}



	/*                                                 *
	*                                                  *
	*                                                  *
	*	  	  FUNCIONES PARA NUEVA VENTA               *
	*                                                  *
	*                                                  *
	*                                                  */ 



	public function NuevaVenta ( $fecha , $venta ) {

		$this->db->query ( "INSERT INTO ventas 
							( precio , fecha ) 
							VALUES 
							('$venta', '$fecha')" ) ;
	}


	public function EliminarVenta ( $id_venta ) {

		$this->db->query ( "DELETE FROM ventas
							WHERE id_venta = '$id_venta'" ) ;
	}


}

?>
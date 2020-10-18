<!-- ../html/ListaEstadisticaMes.php -->
<?php 
	
	require '../html/Partials/Header.php' ;	


			if ( ! isset ( $_POST['mes'] ) && ! isset ( $_POST['anio'] ) ) { 

				/*  PASAMOS LAS VARIABLES DE LA VISTA  */
				$total = $this->totalMes ;
				$max   = $this->diaMax ;
				$min   = $this->diaMin ;
				$p     = $this->promedioDia ;
				$mes   = $this->nombreMes ;

				/*  OBTENER NOMBRE DEL DIA  */
				function NombreDia ( $fecha ) {

					$fechats = strtotime($fecha);
					//el parametro w en la funcion date indica que queremos el dia de la semana
					//lo devuelve en numero 0 domingo, 1 lunes,....

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

				$NombreDiaMin = NombreDia ( $min['fecha'] ) ; 
				$NombreDiaMax = NombreDia ( $max['fecha'] ) ;
				
				$AnioMin = substr ( $min['fecha'] , 0 , 4 ) ;
				$MesMin  = substr ( $min['fecha'] , 5 , 2 ) ;
				$DiaMin  = substr ( $min['fecha'] , 8 , 2 ) ;
				
				$AnioMax = substr ( $max['fecha'] , 0 , 4 ) ;
				$MesMax  = substr ( $max['fecha'] , 5 , 2 ) ;
				$DiaMax  = substr ( $max['fecha'] , 8 , 2 ) ;

				$ganancia = $total['precio'] / 2 ;

				$anioActual = date ( 'Y' ) ;

		?>
			<header>
				<br/><br/>
				<h2>Estadística de <?= $mes['nombre'] ?> del <?= $anioActual ?></h2>
				<br/><br/>

				<table border="1">
					<tr>
						<th>Total</th>
						<td colspan="2">$<?= $total['precio'] ?></td>
					</tr>
					<tr>
						<th>Ganancia</th>
						<td colspan="2">$<?= $ganancia ?></td>
					</tr>
					<tr>
						<th>Promedio</th>
						<td colspan="2">$<?= $p['Promedio'] ?></td>
					</tr>
					<tr>
						<th>Venta minima</th>
						<td><?= $NombreDiaMin ?> <?= $DiaMin ?></td>
						<td>$<?= $min['precio'] ?></td>
					</tr>
					<tr>
						<th>Venta maxima</th>
						<td><?= $NombreDiaMax ?> <?= $DiaMax ?></td>
						<td>$<?= $max['precio'] ?></td>
					</tr>
				</table>
			</header>
	    <?php } ?>

<?php 

	require '../html/Partials/Footer.php' ;	

?>
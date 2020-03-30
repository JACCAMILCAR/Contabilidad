<?php 
class BuscadorAsistencia{
    private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
        }
        public function verificarRFID($codeRFID)
		{
			$sqlVerificarEmpleado = "
									SELECT codeRFID
									FROM Empleado
									WHERE codeRFID = :codeRFID;
								";
			$cmd = $this->conexion->prepare($sqlVerificarEmpleado);
			$cmd->bindParam(':codeRFID', $codeRFID);
			$cmd->execute();
			$datosEmpleado = $cmd->fetch();
          	
            if($datosEmpleado){
	             return true;
		    }else{
			     return false;
		    }
			
		}//end function
		public function IdEmpleado($codeRFID)
		{  

			$idEmpleado = 0;
			$sqlIdEstudiante = " SELECT idEmpleado
								 FROM Empleado 
								 WHERE codeRFID = :codeRFID ;
								"; 
			$cmd = $this->conexion->prepare($sqlIdEstudiante);
			$cmd->bindParam(':codeRFID', $codeRFID);
			$cmd->execute(); 
			$idEstudianteDeLaConsulta = $cmd->fetch();
          	
            if($idEstudianteDeLaConsulta){
            	
            	$idEmpleado = $idEstudianteDeLaConsulta['idEmpleado'];

	 	    }
			return $idEmpleado;
		}

		public function IdAsistencia($idEmpleado)
		{  

			$idAsistencia = 0;
			$sqlIdEstudiante = " SELECT idAsistencia
									FROM Asistencia
									WHERE idEmpleado = :idEmpleado
									AND horaFechaSalida IS null ;
								"; 
			$cmd = $this->conexion->prepare($sqlIdEstudiante);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute(); 
			$idEstudianteDeLaConsulta = $cmd->fetch();
          	
            if($idEstudianteDeLaConsulta){
            	
            	$idAsistencia = $idEstudianteDeLaConsulta['idAsistencia'];

	 	    }
			return $idAsistencia;
		}
		public function ResultadoTotal($valor1, $valor2)
		{  

			$result = 0;
			$sqlIdEstudiante = " SELECT TIME(TIME(:valor1) - TIME(:valor2)) as 'Hora' ;
								"; 
			$cmd = $this->conexion->prepare($sqlIdEstudiante);
			$cmd->bindParam(':valor1', $valor1);
			$cmd->bindParam(':valor2', $valor2);
			$cmd->execute(); 
			$idEstudianteDeLaConsulta = $cmd->fetch();
          	
            if($idEstudianteDeLaConsulta){
            	
            	$result = $idEstudianteDeLaConsulta['Hora'];

	 	    }
			return $result;
		}

		public function HoraEntrada($idAsistencia)
		{  

			$idHora = 0;
			$sqlIdEstudiante = " SELECT TIME(horaFechaEntrada)
									FROM Asistencia
									WHERE idAsistencia = :idAsistencia
									AND horaFechaSalida IS null ;
								"; 
			$cmd = $this->conexion->prepare($sqlIdEstudiante);
			$cmd->bindParam(':idAsistencia', $idAsistencia);
			$cmd->execute(); 
			$idEstudianteDeLaConsulta = $cmd->fetch();
          	
            if($idEstudianteDeLaConsulta){
            	
            	$idHora = $idEstudianteDeLaConsulta['horaFechaEntrada'];

	 	    }
			return $idHora;
		}
		public function TotalHorasAsistencia($idAsistencia)
		{  

			$horasTotal = 0;
			$sqlTotal = " SELECT TIME( now() - INTERVAL horaFechaEntrada HOUR ) as TotalHoras
						  FROM Asistencia
						  WHERE idAsistencia = :idAsistencia ;
						"; 
			$cmd = $this->conexion->prepare($sqlTotal);
			$cmd->bindParam(':idAsistencia', $idAsistencia);
			$cmd->execute(); 
			$idEstudianteDeLaConsulta = $cmd->fetch();
          	
            if($idEstudianteDeLaConsulta){
            	
            	$horasTotal = $idEstudianteDeLaConsulta['TotalHoras'];

	 	    }
			return $horasTotal;
		}
		public function HoraFechaActual()
		{  

			$horaFechaActual = 0;
			$sqlActual = " SELECT now() as horaFecha;
								"; 
			$cmd = $this->conexion->prepare($sqlActual);
			$cmd->execute(); 
			$actualDeLaConsulta = $cmd->fetch();
          	
            if($actualDeLaConsulta){
            	
            	$horaFechaActual = $actualDeLaConsulta['horaFecha'];

	 	    }
			return $horaFechaActual;
		}
		public function HoraActual()
		{  

			$horaFechaActual = 0;
			$sqlActual = " SELECT TIME(now()) as horaFecha;
								"; 
			$cmd = $this->conexion->prepare($sqlActual);
			$cmd->execute(); 
			$actualDeLaConsulta = $cmd->fetch();
          	
            if($actualDeLaConsulta){
            	
            	$horaFechaActual = $actualDeLaConsulta['horaFecha'];

	 	    }
			return $horaFechaActual;
		}
		public function verificarSalidaRFID($idEmpleado)
		{
			$sqlVerificarEmpleado = "
									SELECT idEmpleado
									FROM Asistencia
									WHERE idEmpleado = :idEmpleado
									AND horaFechaSalida IS null
									;
								";
			$cmd = $this->conexion->prepare($sqlVerificarEmpleado);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			$datosEmpleado = $cmd->fetch();
          	
            if($datosEmpleado){
	             return true;
		    }else{
			     return false;
		    }
			
		}//end function
		public function listaAsistenciaRFID()
		{
			$sqlListaDeEmpleados = "
            SELECT a.idAsistencia, e.idEmpleado,
            (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
            a.TotalHoras as 'HorasTrabajadas',
            IF(c.esFlexible,'Horario Flexible','Horario Fijo') AS 'TipoHorario',
            h.horarioIngreso, h.horarioSalida
            FROM empleado e INNER JOIN asistencia a
            ON e.idEmpleado = a.idEmpleado AND e.idEmpleado = 24
            INNER JOIN cargo c
            ON e.idCargo = c.idCargo
            INNER JOIN horario h
			ON c.idCargo = h.idCargo
            AND DATE(a.horaFechaEntrada) = '2019-08-30' GROUP BY a.idAsistencia ;
								";
			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			// $cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();

            //llenando la lista para usaurios...con el foreach
			$listaEmpleadoAsistencia = 	array();
			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
                    $objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
		            $objetoAsistencia->settipohorario($regitroEmpleado['TipoHorario']);
		            $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['horarioIngreso']);
		            $objetoAsistencia->sethoraFechaSalida($regitroEmpleado['horarioSalida']);	
					  $listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					  $i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance

    public function listaAsistencia($idEmpleado)
		{
			$sqlListaDeEmpleados = "
            SELECT a.idAsistencia, e.idEmpleado,
            (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
            a.TotalHoras as 'HorasTrabajadas',
            IF(c.esFlexible,'Horario Flexible','Horario Fijo') AS 'TipoHorario',
            h.horarioIngreso, h.horarioSalida
            FROM empleado e INNER JOIN asistencia a
            ON e.idEmpleado = a.idEmpleado AND e.idEmpleado = :idEmpleado
            INNER JOIN cargo c
            ON e.idCargo = c.idCargo
            INNER JOIN horario h
            ON c.idCargo = h.idCargo
            INNER Join turno t
            ON h.idTurno = t.idTurno AND t.idTurno = 1
            AND DATE(a.horaFechaEntrada) = '2019-08-30' ;
								";
			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();

            //llenando la lista para usaurios...con el foreach
			$listaEmpleadoAsistencia = 	array();
			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
                    $objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
		            $objetoAsistencia->setcargo($regitroEmpleado['Cargo']);	
		            $objetoAsistencia->settipohorario($regitroEmpleado['TipoHorario']);
		            $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['horarioIngreso']);
		            $objetoAsistencia->sethoraFechaSalida($regitroEmpleado['horarioSalida']);	
					  $listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					  $i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaEmpleadoFiltro($nivel)
		{   
			$sqlListaDeEmpleados = "
            SELECT e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
            (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA,
            a.TotalHoras as HorasTrabajadas,
            IF(c.esFlexible,'Horario Flexible','Horario Fijo') AS TipoHorario,
            h.horarioIngreso, h.horarioSalida
            FROM empleado e INNER JOIN asistencia a
            ON e.idEmpleado = a.idEmpleado AND e.idEmpleado = 24
            INNER JOIN cargo c
            ON e.idCargo = c.idCargo
            INNER JOIN horario h
			ON c.idCargo = h.idCargo
			
									";	
			$condiciones = [];//arreglo donde se ira colocando los registros
			
            
            if (!empty($nivel) && $nivel == '3') {
				// $condiciones[] = " N.codigoNivel = :nivel ";
				$condiciones[] = "DATE(a.horaFechaEntrada) >= '2019-08-01' AND DATE(a.horaFechaEntrada) <= '2019-08-30'";
			}
			if (!empty($nivel) && $nivel == '2') {
				$condiciones[] = " DATE(a.horaFechaEntrada) >= '2019-08-26' AND DATE(a.horaFechaEntrada) <= '2019-08-30'";
            }
			if (!empty($nivel) && $nivel == '1') {
				$condiciones[] = " DATE(a.horaFechaEntrada) = '2019-08-30'";
            }
			if (!empty($condiciones)) {
				$sqlListaDeEmpleados .= "AND ".implode(" AND ",$condiciones);
				
			}
			$sqlListaDeEmpleados .= " GROUP By a.idAsistencia ORDER BY DATE(a.horaFechaEntrada)";

			// print_r($sqlListaDeEmpleados);
			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->execute();

            $listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();

            //llenando la lista para usaurios...con el foreach
			$listaEmpleadoAsistencia = 	array();
			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
					$objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
		            $objetoAsistencia->settipoHorario($regitroEmpleado['TipoHorario']);
		            $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['horarioIngreso']);
		            $objetoAsistencia->sethoraFechaSalida($regitroEmpleado['horarioSalida']);	
					  $listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					  $i++;
		    }

			return $listaEmpleadoAsistencia;

		}
		//Empleado flexible
		public function listaFlexible($idEmpleado)
		{
			$sqlListaDeEmpleados = "
			SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
			(ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
			(TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', 
			a.TotalHoras as 'HorasTrabajadas', TIMESTAMPDIFF(HOUR,(TIME'08:00:00'), (a.TotalHoras)) as 'horaPorTrabajar'
			FROM Cargo c, Empleado e, Asistencia a
			WHERE c.esFlexible = 1
			AND c.idCargo = e.idCargo
			AND e.idEmpleado = :idEmpleado
			AND e.idEmpleado = a.idEmpleado
			AND DATE(a.horaFechaEntrada) = DATE(now());
								";
			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();

			$listaEmpleadoAsistencia = 	array();
			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
		            $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
					$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
					$objetoAsistencia->sethoraPorTrabajar($regitroEmpleado['horaPorTrabajar']);

					  $listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					  $i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaNoFlexible($idEmpleado)
		{
			$sqlListaDeEmpleados = "
			SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
			(ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
			(TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', 
			a.TotalHoras as 'HorasTrabajadas', SUM(a.TotalHoras) as 'Total'
			FROM Cargo c, Empleado e, Asistencia a
			WHERE c.esFlexible = 0
			AND c.idCargo = e.idCargo
			AND e.idEmpleado = :idEmpleado
			AND e.idEmpleado = a.idEmpleado
			AND MONTH(a.horaFechaEntrada) = MONTH(CURDATE())
			GROUP BY DATE(a.horaFechaEntrada)
			ORDER BY DATE(a.horaFechaEntrada)
			;
								";
			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();

			$listaEmpleadoAsistencia = 	array();
			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
					$objetoAsistencia->settotal($regitroEmpleado['Total']);
					
	
					  $listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					  $i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaFlexibleFiltro($idEmpleado,$nivel)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
			SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
			(ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
			(TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', 
			a.TotalHoras as 'HorasTrabajadas', TIMESTAMPDIFF(HOUR,(TIME'08:00:00'), (a.TotalHoras)) as 'horaPorTrabajar'
			FROM Cargo c, Empleado e, Asistencia a
			WHERE c.esFlexible = 1
			AND c.idCargo = e.idCargo
			AND e.idEmpleado = :idEmpleado
			AND e.idEmpleado = a.idEmpleado
			
			 ";
			$condicion = [];//arreglo donde se ira colocando los registros
			
            if (!empty($nivel) && $nivel == '3') {
				$condicion[] = "MONTH(a.horaFechaEntrada) = MONTH(now())";
			}
			if (!empty($nivel) && $nivel == '2') {
				$condicion[] = " DATE(a.horaFechaEntrada) >= '2019-10-28' AND DATE(a.horaFechaEntrada) <= DATE(now())";
            }
			if (!empty($nivel) && $nivel == '1') {
				$condicion[] = " DATE(a.horaFechaEntrada) = DATE(now())";
            }
			if (!empty($condicion)) {
				$sqlListaDeEmpleados .= "AND ".implode(" AND ",$condicion);
				
			}
			$sqlListaDeEmpleados .= " GROUP By a.idAsistencia ORDER BY DATE(a.horaFechaEntrada)";

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
			// if ($listaDeEmpleadoDeLaConsulta) {echo 'hay elementos';
			// 	var_dump($listaDeEmpleadoDeLaConsulta);
			// }else{echo 'sin elementos';}
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
		            $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
					$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
					$objetoAsistencia->sethoraPorTrabajar($regitroEmpleado['horaPorTrabajar']);
	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaNoFlexibleFiltro($idEmpleado,$nivel)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
			SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
			(ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
			(TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', 
			a.TotalHoras as 'HorasTrabajadas', SUM(a.TotalHoras) as 'Total', (if( F.fecha = (DATE(a.horaFechaEntrada)),'Feriado','N')) as 'Feriado1'
			FROM Cargo c, Empleado e, Asistencia a, Feriado F
			WHERE c.esFlexible = 0
			AND c.idCargo = e.idCargo
			AND e.idEmpleado = :idEmpleado
			AND e.idEmpleado = a.idEmpleado
			
			 ";
			$condicion = [];//arreglo donde se ira colocando los registros
			
            if (!empty($nivel) && $nivel == '3') {
				$condicion[] = "MONTH(a.horaFechaEntrada) = MONTH(CURDATE())";
			}
			if (!empty($nivel) && $nivel == '2') {
				$condicion[] = " DATE(a.horaFechaEntrada) >= '2019-12-02' AND DATE(a.horaFechaEntrada) <= DATE(now())";
            }
			if (!empty($nivel) && $nivel == '1') {
				$condicion[] = " DATE(a.horaFechaEntrada) = DATE(now())";
            }
			if (!empty($condicion)) {
				$sqlListaDeEmpleados .= " AND ".implode(" AND ",$condicion);
				
			}
			$sqlListaDeEmpleados .= " GROUP By DATE(a.horaFechaEntrada) ORDER BY DATE(a.horaFechaEntrada) ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
			// if ($listaDeEmpleadoDeLaConsulta) {echo 'hay elementos';
			// 	var_dump($listaDeEmpleadoDeLaConsulta);
			// }else{echo 'sin elementos';}
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);
					$objetoAsistencia->settotal($regitroEmpleado['Total']);
					$objetoAsistencia->settotalSemanal($regitroEmpleado['Feriado1']);
	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance


		public function listaNoFlexibleMensual($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND MONTH(a.horaFechaEntrada) = MONTH(CURDATE()) 
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaNoFlexibleMensualTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND MONTH(a.horaFechaEntrada) = MONTH(CURDATE()) 
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance

		public function listaNoFlexibleSemanal($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-09' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now());
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaNoFlexibleSemanalTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-16' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now())
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance
		public function listaNoFlexibleSemanalTotalSemana($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-16' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now())
		GROUP BY 'DIA'
		ORDER BY DATE(a.horaFechaEntrada);
			 ";

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance


		public function listaNoFlexibleDiario($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) = DATE(now()) 
		 ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaNoFlexibleDiarioTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		  AND DATE(a.horaFechaEntrada) = DATE(now()) 
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance
		public function listaNoFlexibleMensualTotalMes($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 0 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		  AND DATE(a.horaFechaEntrada) = DATE(now()) 
		GROUP BY MONTH(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance
		public function listaFlexibleMensual($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND MONTH(a.horaFechaEntrada) = MONTH(CURDATE()) 
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaFlexibleMensualTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND MONTH(a.horaFechaEntrada) = MONTH(CURDATE()) 
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance

		public function listaFlexibleSemanal($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-09' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now());
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaFlexibleSemanalTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-16' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now())
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance
		public function listaFlexibleSemanalTotalSemana($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) >= '2019-12-16' 
		 AND DATE(a.horaFechaEntrada) <= DATE(now())
		GROUP BY 'DIA'
		ORDER BY DATE(a.horaFechaEntrada);
			 ";

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance


		public function listaFlexibleDiario($idEmpleado)
		{
				// echo 'id: '.$idEmpleado;
			$sqlListaDeEmpleados = "
		SELECT a.idAsistencia, e.idEmpleado,DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA', 
		 (TIME(a.horaFechaEntrada)) as 'Entrada', (TIME(a.horaFechaSalida)) as 'Salida', a.TotalHoras as 'HorasTrabajadas' 
		 FROM Cargo c, Empleado e, Asistencia a 
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		 AND DATE(a.horaFechaEntrada) = DATE(now()) 
		 ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaDeEmpleados);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaDeEmpleadoDeLaConsulta = $cmd->fetchAll();
		
			$listaEmpleadoAsistencia = 	array();

			$i = 0;
          	
            foreach($listaDeEmpleadoDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->sethoraFechaEntrada($regitroEmpleado['Entrada']);
					$objetoAsistencia->sethoraFechaSalida($regitroEmpleado['Salida']);
		         	$objetoAsistencia->setTotalHoras($regitroEmpleado['HorasTrabajadas']);

	
					$listaEmpleadoAsistencia[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaEmpleadoAsistencia;
		}//end function for assistance
		public function listaFlexibleDiarioTotal($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 1 
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		  AND DATE(a.horaFechaEntrada) = DATE(now()) 
		GROUP BY DATE(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance
		public function listaFlexibleMensualTotalMes($idEmpleado)
		{
			$sqlListaAsistencia = "
		SELECT a.idAsistencia, e.idEmpleado, DATE(a.horaFechaEntrada) as 'Fecha',
		 (ELT(WEEKDAY(DATE(a.horaFechaEntrada)) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS 'DIA',
		  SUM(a.TotalHoras) as 'TotalesDiario'
		 FROM Cargo c, Empleado e, Asistencia a
		 WHERE c.esFlexible = 1
		 AND c.idCargo = e.idCargo 
		 AND e.idEmpleado = :idEmpleado
		 AND e.idEmpleado = a.idEmpleado 
		  AND DATE(a.horaFechaEntrada) = DATE(now()) 
		GROUP BY MONTH(a.horaFechaEntrada)
		ORDER BY DATE(a.horaFechaEntrada);
			 ";
						// print_r($sqlListaDeEmpleados);

			$cmd = $this->conexion->prepare($sqlListaAsistencia);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->execute();
			
			$listaAsistenciaDeLaConsulta = $cmd->fetchAll();
		
			$listaNoFlexibleMensualTotal = 	array();

			$i = 0;
          	
            foreach($listaAsistenciaDeLaConsulta as $regitroEmpleado){
                    $objetoAsistencia = new Asistencia();	
					$objetoAsistencia->setidAsistencia($regitroEmpleado['idAsistencia']);	
					$objetoAsistencia->setfecha($regitroEmpleado['Fecha']);	
	            	$objetoAsistencia->setdia($regitroEmpleado['DIA']);	
	            	 $objetoAsistencia->settotalDiario($regitroEmpleado['TotalesDiario']);
	
					$listaNoFlexibleMensualTotal[$i] = $objetoAsistencia;
					$i++;
		    }
			return $listaNoFlexibleMensualTotal;
		}//end function for assistance

	}

?>

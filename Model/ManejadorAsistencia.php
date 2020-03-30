<?php 

class ManejadorAsistencia
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarAsistencia(Asistencia $objetoAsistencia)
		{
			
			$sqlInsertarEmpleado = " INSERT INTO Asistencia(idEmpleado,horaFechaEntrada,horaFechaSalida,TotalHoras) 
			VALUES (:idEmpleado,:horaFechaEntrada,:horaFechaSalida,:TotalHoras); ";
				
			$idEmpleado = $objetoAsistencia->getidEmpleado();
			$horaFechaEntrada = $objetoAsistencia->gethoraFechaEntrada();
			$horaFechaSalida = $objetoAsistencia->gethoraFechaSalida();
            $TotalHoras = $objetoAsistencia->getTotalHoras();
          
          	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarEmpleado);
			$cmd->bindParam(':idEmpleado', $idEmpleado);
			$cmd->bindParam(':horaFechaEntrada', $horaFechaEntrada);
			$cmd->bindParam(':horaFechaSalida', $horaFechaSalida);
			$cmd->bindParam(':TotalHoras', $TotalHoras);
		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarRegistroAsistencia(Asistencia $objetoAsistencia, $idAsistencia)
		{
				
			$sqlActualizarAsistencia = " UPDATE Asistencia
											SET idAsistencia = :idAsistencia,
												horaFechaSalida = :horaFechaSalida,
												TotalHoras = :TotalHoras
											WHERE idAsistencia = :idAsistencia ;
										";
									
            $idAsistencia = $objetoAsistencia->getidAsistencia();
            $horaFechaSalida = $objetoAsistencia->gethoraFechaSalida();
            $TotalHoras = $objetoAsistencia->getTotalHoras();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarAsistencia);
            $cmd->bindParam(':idAsistencia', $idAsistencia);
            $cmd->bindParam(':horaFechaSalida', $horaFechaSalida);
            $cmd->bindParam(':TotalHoras', $TotalHoras);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		

	}//end class
 ?>
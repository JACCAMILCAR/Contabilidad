<?php 

class ManejadorGnlUsuario
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarGnlUsuario(GnlUsuario $objetoGnlUsuario)
		{
			
			$sqlInsertarGnlUsuario= " INSERT INTO GnlUsuario(codUsuario,codSucursal,enviado) 
			VALUES (:codUsuario,:codSucursal,:enviado); ";
				
			$codUsuario = $objetoIveSolicitud->getcodUsuario();
			$codSucursal = $objetoIveSolicitud->getcodSucursal();
			$enviado = $objetoIveSolicitud->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarGnlUsuario);
			$cmd->bindParam(':codUsuario', $codUsuario);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':enviado', $enviado);

		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarGnlUsuario(GnlUsuario $objetoGnlUsuario, $codUsuario)
		{
				
			$sqlActualizarGnlUsuario = " UPDATE GnlUsuario
											SET codUsuario = :codUsuario,
												codSucursal = :codSucursal,								
												enviado = :enviado
											WHERE codUsuario = :codUsuario ;
										";
									
            $codUsuario = $objetoIveSolicitud->getcodUsuario();
			$codSucursal = $objetoIveSolicitud->getcodSucursal();
			$enviado = $objetoIveSolicitud->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarGnlUsuario);
            $cmd->bindParam(':codUsuario', $codUsuario);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':enviado', $enviado);

			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarGnlUsuario($codUsuario)
		{
			$sqlEliminarGnlUsuario = " DELETE FROM GnlUsuario WHERE codUsuario = :codUsuario ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarGnlUsuario);
					$cmd->bindParam(':codUsuario', $codUsuario);
					$cmd->execute();
					return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la eliminacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		

	}//end class
 ?>
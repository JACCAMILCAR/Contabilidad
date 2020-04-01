<?php 

class ManejadorGnlArea
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarGnlArea(GnlArea $objetoGnlArea)
		{
			
			$sqlInsertarGnlArea = " INSERT INTO GnlArea(codArea,codSucursal,enviado) 
			VALUES (:codArea,:codSucursal,:enviado); ";
				
			$codArea = $objetoGnlArea->getcodArea();
			$codSucursal = $objetoGnlArea->getcodSucursal();
			$enviado = $objetoGnlArea->getenviado();
			                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarGnlArea);
			$cmd->bindParam(':codArea', $codArea);
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

		public function actualizarGnlArea(GnlArea $objetoGnlArea, $codArea)
		{
				
			$sqlActualizarGnlArea = " UPDATE GnlArea
											SET codArea = :codArea,
												codSucursal = :codSucursal,
												enviado = :enviado
											WHERE codArea = :codArea ;
										";
									
            $codArea = $objetoGnlArea->getcodArea();
			$codSucursal = $objetoGnlArea->getcodSucursal();
			$enviado = $objetoGnlArea->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarGnlArea);
            $cmd->bindParam(':codArea', $codArea);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':enviado', $enviado);
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarGnlArea($codArea)
		{
			$sqlEliminarGnlArea = " DELETE FROM GnlArea WHERE codArea = :codArea ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarGnlArea);
					$cmd->bindParam(':codArea', $codArea);
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
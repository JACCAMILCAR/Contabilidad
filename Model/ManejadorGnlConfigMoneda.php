<?php 

class ManejadorGnlConfigMoneda
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarGnlConfigMoneda(GnlConfigMoneda $objetoGnlConfigMoneda)
		{
			
			$sqlInsertarGnlConfigMoneda = " INSERT INTO GnlConfigMoneda(codMoneda,codSucursal,enviado) 
			VALUES (:codMoneda,:codSucursal,:enviado); ";
				
			$codMoneda = $objetoGnlConfigMoneda->getcodMoneda();
			$codSucursal = $objetoGnlConfigMoneda->getcodSucursal();
			$enviado = $objetoGnlConfigMoneda->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarGnlConfigMoneda);
			$cmd->bindParam(':codMoneda', $codMoneda);
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

		public function actualizarGnlConfigMoneda(GnlConfigMoneda $objetoGnlConfigMoneda, $codMoneda)
		{
				
			$sqlActualizarGnlConfigMoneda = " UPDATE GnlConfigMoneda
											SET codMoneda = :codMoneda,
												codSucursal = :codSucursal,
												enviado = :enviado
											WHERE codMoneda = :codMoneda ;
										";
									
            $codMoneda = $objetoGnlConfigMoneda->getcodMoneda();
			$codSucursal = $objetoGnlConfigMoneda->getcodSucursal();
			$enviado = $objetoGnlConfigMoneda->getenviado();

			try{
			$cmd->bindParam(':codMoneda', $codMoneda);
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
		public function eliminarGnlConfigMoneda($codMoneda)
		{
			$sqlEliminarGnlConfigMoneda = " DELETE FROM GnlConfigMoneda WHERE codMoneda = :codMoneda ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarGnlConfigMoneda);
					$cmd->bindParam(':codMoneda', $codMoneda);
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
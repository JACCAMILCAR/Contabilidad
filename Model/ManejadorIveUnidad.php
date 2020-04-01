<?php 

class ManejadorIveUnidad
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveUnidad(IveUnidad $objetoIveUnidad)
		{
			
			$sqlInsertarIveUnidad = " INSERT INTO IveUnidad(codUnidad,descUnidad,codSucursal,enviado) 
			VALUES (:codUnidad,:descUnidad,:codSucursal,:enviado); ";
				
			$codUnidad = $objetoIveUnidad->getcodUnidad();
			$descUnidad = $objetoIveUnidad->getdescUnidad();
			$codSucursal = $objetoIveUnidad->getcodSucursal();
            $enviado = $objetoIveUnidad->getenviado();
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveUnidad);
			$cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':descUnidad', $descUnidad);
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

		public function actualizarIveUnidad(IveUnidad $objetoIveUnidad, $codUnidad)
		{
				
			$sqlActualizarIveUnidad = " UPDATE IveUnidad
											SET codUnidad = :codUnidad,
												descUnidad = :descUnidad,
												codSucursal = :codSucursal
											WHERE codUnidad = :codUnidad ;
										";
									
            $codUnidad = $objetoIveUnidad->getcodUnidad();
			$descUnidad = $objetoIveUnidad->getdescUnidad();
			$codSucursal = $objetoIveUnidad->getcodSucursal();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveUnidad);
            $cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':descUnidad', $descUnidad);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveUnidad($codUnidad)
		{
			$sqlEliminarIveUnidad = " DELETE FROM IveUnidad WHERE codUnidad = :codUnidad ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveUnidad);
					$cmd->bindParam(':codUnidad', $codUnidad);
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
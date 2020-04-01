<?php 

class ManejadorIveConfigCodTransaccion
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveConfigCodTransaccion(IveConfigCodTransaccion $objetoIveConfigCodTransaccion)
		{
			
			$sqlInsertarIveConfigCodTransaccion = " INSERT INTO IveConfigCodTransaccion(codTransaccion,codSucursal,descCodTransaccion,tipoCodTransaccion,conAsientos,enviado) 
			VALUES (:codTransaccion,:codSucursal,:descCodTransaccion,:tipoCodTransaccion,:conAsientos,:enviado); ";
				
			$codTransaccion = $objetoIveConfigCodTransaccion->getcodTransaccion();
			$codSucursal = $objetoIveConfigCodTransaccion->getcodSucursal();
			$descCodTransaccion = $objetoIveConfigCodTransaccion->getdescCodTransaccion();
			$tipoCodTransaccion = $objetoIveConfigCodTransaccion->gettipoCodTransaccion();
			$conAsientos = $objetoIveConfigCodTransaccion->getconAsientos();
			$enviado = $objetoIveConfigCodTransaccion->getenviado();
				
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveConfigCodTransaccion);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':descCodTransaccion', $descCodTransaccion);
			$cmd->bindParam(':tipoCodTransaccion', $tipoCodTransaccion);			
			$cmd->bindParam(':conAsientos', $conAsientos);
			$cmd->bindParam(':enviado', $enviado);
					
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveConfigCodTransaccion(IveConfigCodTransaccion $objetoIveConfigCodTransaccion, $codTransaccion)
		{
				
			$sqlActualizarIveConfigCodTransaccion = " UPDATE IveConfigCodTransaccion
											SET codTransaccion = :codTransaccion,
												codSucursal = :codSucursal,
												descCodTransaccion = :descCodTransaccion,
												tipoCodTransaccion = :tipoCodTransaccion,
												conAsientos = :conAsientos,
												enviado = :enviado
											WHERE codTransaccion = :codTransaccion ;
										";
									
            $codTransaccion = $objetoIveConfigCodTransaccion->getcodTransaccion();
			$codSucursal = $objetoIveConfigCodTransaccion->getcodSucursal();
			$descCodTransaccion = $objetoIveConfigCodTransaccion->getdescCodTransaccion();
			$tipoCodTransaccion = $objetoIveConfigCodTransaccion->gettipoCodTransaccion();
			$conAsientos = $objetoIveConfigCodTransaccion->getconAsientos();
			$enviado = $objetoIveConfigCodTransaccion->getenviado();
			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveConfigCodTransaccion);
           $cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':descCodTransaccion', $descCodTransaccion);
			$cmd->bindParam(':tipoCodTransaccion', $tipoCodTransaccion);			
			$cmd->bindParam(':conAsientos', $conAsientos);
			$cmd->bindParam(':enviado', $enviado);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveConfigCodTransaccion($codTransaccion)
		{
			$sqlEliminarIveConfigCodTransaccion = " DELETE FROM IveConfigCodTransaccion WHERE codTransaccion = :codTransaccion ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveConfigCodTransaccion);
					$cmd->bindParam(':codTransaccion', $codTransaccion);
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
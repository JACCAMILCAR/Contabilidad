<?php 

class ManejadorIveConfigPreliminares
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveConfigPreliminares(IveConfigPreliminares $objetoIveConfigPreliminares)
		{
			
			$sqlInsertarIveConfigPreliminares = " INSERT INTO IveConfigPreliminares(codPreliminares,codSucursal,tipoCodigo,formaCodigo,longitudCodigo,aplicacionCodigo,mascaraCodigo,enviado) 
			VALUES (:codPreliminares,:codSucursal,:tipoCodigo,:formaCodigo,:longitudCodigo,:aplicacionCodigo,:mascaraCodigo,:enviado); ";
				
			$codPreliminares = $objetoIveConfigPreliminares->getcodPreliminares();
			$codSucursal = $objetoIveConfigPreliminares->getcodSucursal();
			$tipoCodigo = $objetoIveConfigPreliminares->gettipoCodigo();
			$formaCodigo = $objetoIveConfigPreliminares->getformaCodigo();
			$longitudCodigo = $objetoIveConfigPreliminares->getlongitudCodigo();
			$aplicacionCodigo = $objetoIveConfigPreliminares->getaplicacionCodigo();
			$mascaraCodigo = $objetoIveConfigPreliminares->getmascaraCodigo();
			$enviado = $objetoIveConfigPreliminares->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveConfigPreliminares);
			$cmd->bindParam(':codPreliminares', $codPreliminares);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':tipoCodigo', $tipoCodigo);
			$cmd->bindParam(':formaCodigo', $formaCodigo);			
			$cmd->bindParam(':longitudCodigo', $longitudCodigo);
			$cmd->bindParam(':aplicacionCodigo', $aplicacionCodigo);
			$cmd->bindParam(':mascaraCodigo', $mascaraCodigo);
			$cmd->bindParam(':enviado', $enviado);

		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveConfigPreliminares(IveConfigPreliminares $objetoIveConfigPreliminares, $codPreliminares)
		{
				
			$sqlActualizarIveConfigPreliminares = " UPDATE IveConfigPreliminares
											SET codPreliminares = :codPreliminares,
												codSucursal = :codSucursal,
												tipoCodigo = :tipoCodigo,
												formaCodigo = :formaCodigo,
												longitudCodigo = :longitudCodigo,
												aplicacionCodigo = :aplicacionCodigo,
												mascaraCodigo = :mascaraCodigo,
												enviado = :enviado
											WHERE codPreliminares = :codPreliminares ;
										";
									
            $codPreliminares = $objetoIveConfigPreliminares->getcodPreliminares();
			$codSucursal = $objetoIveConfigPreliminares->getcodSucursal();
			$tipoCodigo = $objetoIveConfigPreliminares->gettipoCodigo();
			$formaCodigo = $objetoIveConfigPreliminares->getformaCodigo();
			$longitudCodigo = $objetoIveConfigPreliminares->getlongitudCodigo();
			$aplicacionCodigo = $objetoIveConfigPreliminares->getaplicacionCodigo();
			$mascaraCodigo = $objetoIveConfigPreliminares->getmascaraCodigo();
			$enviado = $objetoIveConfigPreliminares->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveConfigPreliminares);
            $cmd->bindParam(':codPreliminares', $codPreliminares);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':tipoCodigo', $tipoCodigo);
			$cmd->bindParam(':formaCodigo', $formaCodigo);			
			$cmd->bindParam(':longitudCodigo', $longitudCodigo);
			$cmd->bindParam(':aplicacionCodigo', $aplicacionCodigo);
			$cmd->bindParam(':mascaraCodigo', $mascaraCodigo);
			$cmd->bindParam(':enviado', $enviado);

			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveConfigPreliminares($codPreliminares)
		{
			$sqlEliminarIveConfigPreliminares = " DELETE FROM IveConfigPreliminares WHERE codPreliminares = :codPreliminares ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveConfigPreliminares);
					$cmd->bindParam(':codPreliminares', $codPreliminares);
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
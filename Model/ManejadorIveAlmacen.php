<?php 

class ManejadorIveAlmacen
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conectar();
		}

		public function registrarIveAlmacen(IveAlmacen $objetoIveAlmacen)
		{
			
			$sqlInsertarIveAlmacen = " INSERT INTO IveAlmacen(codAlmacen,descAlmacen,codSucursal,enviado) 
			VALUES (:codAlmacen,:descAlmacen,:codSucursal,:enviado); ";
				
			$codAlmacen = $objetoIveAlmacen->getcodAlmacen();
			$descAlmacen = $objetoIveAlmacen->getdescAlmacen();
			$codSucursal = $objetoIveAlmacen->getcodSucursal();
            $enviado = $objetoIveAlmacen->getenviado();
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveAlmacen);
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descAlmacen', $descAlmacen);
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

		public function actualizarIveAlmacen(IveAlmacen $objetoIveAlmacen, $codAlmacen)
		{
				
			$sqlActualizarIveAlmacen = " UPDATE IveAlmacen
											SET codAlmacen = :codAlmacen,
												descAlmacen = :descAlmacen,
												codSucursal = :codSucursal
											WHERE codAlmacen = :codAlmacen ;
										";
									
            $codAlmacen = $objetoIveAlmacen->getcodAlmacen();
			$descAlmacen = $objetoIveAlmacen->getdescAlmacen();
			$codSucursal = $objetoIveAlmacen->getcodSucursal();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveAlmacen);
            $cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descAlmacen', $descAlmacen);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveAlmacen($codAlmacen)
		{
			$sqlEliminarIveAlmacen = " DELETE FROM IveAlmacen WHERE codAlmacen = :codAlmacen ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveAlmacen);
					$cmd->bindParam(':codAlmacen', $codAlmacen);
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
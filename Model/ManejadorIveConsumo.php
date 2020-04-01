<?php 

class ManejadorIveConsumo
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveConsumo(IveConsumo $objetoIveConsumo)
		{
			
			$sqlInsertarIveConsumo = " INSERT INTO IveConsumo(codConsumo,codSucursal,codArea,codAlmacen,codTransaccion,descConsumo,fechaConsumo,anulado,estado,cuentaConsumo,cuentaSol,usuarioRegistro,usuarioConsumo,enviado) 
			VALUES (:codConsumo,:codSucursal,:codArea,:codAlmacen,:codTransaccion,:descConsumo,:fechaConsumo,:anulado,:estado,:cuentaConsumo,:cuentaSol,:usuarioRegistro,:usuarioConsumo,:enviado); ";
				
			$codConsumo = $objetoIveConsumo->getcodConsumo();
			$codSucursal = $objetoIveConsumo->getcodSucursal();
			$codArea = $objetoIveConsumo->getcodArea();
			$codAlmacen = $objetoIveConsumo->getcodAlmacen();
			$codTransaccion = $objetoIveConsumo->getcodTransaccion();
			$descConsumo = $objetoIveConsumo->getdescConsumo();
			$fechaConsumo = $objetoIveConsumo->getfechaConsumo();
			$anulado = $objetoIveConsumo->getanulado();
			$estado = $objetoIveConsumo->getestado();
			$cuentaConsumo = $objetoIveConsumo->getcuentaConsumo();
			$cuentaSol = $objetoIveConsumo->getcuentaSol();
			$usuarioRegistro = $objetoIveConsumo->getusuarioRegistro();
			$usuarioConsumo = $objetoIveConsumo->getusuarioConsumo();
			$enviado = $objetoIveConsumo->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveConsumo);
			$cmd->bindParam(':codConsumo', $codConsumo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codArea', $codArea);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':descConsumo', $descConsumo);
			$cmd->bindParam(':fechaConsumo', $fechaConsumo);
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':cuentaSol', $cuentaSol);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);
			$cmd->bindParam(':usuarioConsumo', $usuarioConsumo);
			$cmd->bindParam(':enviado', $enviado);

		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveConsumo(IveConsumo $objetoIveConsumo, $codConsumo)
		{
				
			$sqlActualizarIveConsumo = " UPDATE IveConsumo
											SET codConsumo = :codConsumo,
												codSucursal = :codSucursal,
												codArea = :codArea,
												codAlmacen = :codAlmacen,
												codTransaccion = :codTransaccion,
												descConsumo = :descConsumo,
												fechaConsumo = :fechaConsumo,
												anulado = :anulado,
												estado = :estado,
												cuentaConsumo = :cuentaConsumo,
												cuentaSol = :cuentaSol,
												usuarioRegistro = :usuarioRegistro,
												usuarioConsumo = :usuarioConsumo,
												enviado = :enviado
											WHERE codConsumo = :codConsumo ;
										";
									
            $codConsumo = $objetoIveConsumo->getcodConsumo();
			$codSucursal = $objetoIveConsumo->getcodSucursal();
			$codArea = $objetoIveConsumo->getcodArea();
			$codAlmacen = $objetoIveConsumo->getcodAlmacen();
			$codTransaccion = $objetoIveConsumo->getcodTransaccion();
			$descConsumo = $objetoIveConsumo->getdescConsumo();
			$fechaConsumo = $objetoIveConsumo->getfechaConsumo();
			$anulado = $objetoIveConsumo->getanulado();
			$estado = $objetoIveConsumo->getestado();
			$cuentaConsumo = $objetoIveConsumo->getcuentaConsumo();
			$cuentaSol = $objetoIveConsumo->getcuentaSol();
			$usuarioRegistro = $objetoIveConsumo->getusuarioRegistro();
			$usuarioConsumo = $objetoIveConsumo->getusuarioConsumo();
			$enviado = $objetoIveConsumo->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveConsumo);
            $cmd->bindParam(':codConsumo', $codConsumo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codArea', $codArea);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':descConsumo', $descConsumo);
			$cmd->bindParam(':fechaConsumo', $fechaConsumo);
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':cuentaSol', $cuentaSol);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);
			$cmd->bindParam(':usuarioConsumo', $usuarioConsumo);
			$cmd->bindParam(':enviado', $enviado);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveConsumo($codConsumo)
		{
			$sqlEliminarIveConsumo = " DELETE FROM IveConsumo WHERE codConsumo = :codConsumo ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveConsumo);
					$cmd->bindParam(':codConsumo', $codConsumo);
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
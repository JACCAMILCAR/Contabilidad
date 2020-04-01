<?php 

class ManejadorIveTransaccionesConsumo
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveTransaccionesConsumo(IveTransaccionesConsumo $objetoIveTransaccionesConsumo)
		{
			
			$sqlInsertarIveTransaccionesConsumo = " INSERT INTO IveTransaccionesConsumo(codTransConsumo,codArticulo,codSucursal,cuentaSolicitud,cantidadAprobadaConsumo,fechaAprobadaConsumo,horaTransConsumo,glosaTransConsumo,cantidadTransConsumo,estado,anulado,usuarioRegistro,usuarioConsumo,enviado) 
			VALUES (:codTransConsumo,:codArticulo,:codSucursal,:cuentaSolicitud,:cantidadAprobadaConsumo,:fechaAprobadaConsumo,:horaTransConsumo,:glosaTransConsumo,:cantidadTransConsumo,:estado,anulado,:usuarioRegistro,:usuarioConsumo,:enviado); ";
				
			$codTransConsumo = $objetoIveTransaccionesConsumo->getcodTransConsumo();
			$codArticulo = $objetoIveTransaccionesConsumo->getcodArticulo();
			$codSucursal = $objetoIveTransaccionesConsumo->getcodSucursal();
			$cuentaSolicitud = $objetoIveTransaccionesConsumo->getcuentaSolicitud();
			$cantidadAprobadaConsumo = $objetoIveTransaccionesConsumo->getcantidadAprobadaConsumo();
			$fechaAprobadaConsumo = $objetoIveTransaccionesConsumo->getfechaAprobadaConsumo();
			$horaTransConsumo = $objetoIveTransaccionesConsumo->gethoraTransConsumo();
			$glosaTransConsumo = $objetoIveTransaccionesConsumo->getglosaTransConsumo();
			$cantidadTransConsumo = $objetoIveTransaccionesConsumo->getcantidadTransConsumo();
			$estado = $objetoIveTransaccionesConsumo->getestado();
			$anulado = $objetoIveTransaccionesConsumo->getanulado();
			$usuarioRegistro = $objetoIveTransaccionesConsumo->getusuarioRegistro();
			$usuarioConsumo = $objetoIveTransaccionesConsumo->getusuarioConsumo();
			$enviado = $objetoIveTransaccionesConsumo->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveTransaccionesConsumo);
			$cmd->bindParam(':codTransConsumo', $codTransConsumo);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cantidadAprobadaConsumo', $cantidadAprobadaConsumo);
			$cmd->bindParam(':fechaAprobadaConsumo', $fechaAprobadaConsumo);
			$cmd->bindParam(':horaTransConsumo', $horaTransConsumo);
			$cmd->bindParam(':glosaTransConsumo', $glosaTransConsumo);
			$cmd->bindParam(':cantidadTransConsumo', $cantidadTransConsumo);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':anulado', $anulado);
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

		public function actualizarIveTransaccionesConsumo(IveTransaccionesConsumo $objetoIveTransaccionesConsumo, $codTransConsumo)
		{
				
			$sqlActualizarIveTransaccionesConsumo = " UPDATE IveTransaccionesConsumo
											SET codTransConsumo = :codTransConsumo,
												codArticulo = :codArticulo,
												codSucursal = :codSucursal,
												cuentaSolicitud = :cuentaSolicitud,
												cantidadAprobadaConsumo = :cantidadAprobadaConsumo,
												fechaAprobadaConsumo = :fechaAprobadaConsumo,
												horaTransConsumo = :horaTransConsumo,
												glosaTransConsumo = :glosaTransConsumo,
												cantidadTransConsumo = :cantidadTransConsumo,
												estado = :estado,
												anulado = :anulado,
												usuarioRegistro = :usuarioRegistro,
												usuarioConsumo = :usuarioConsumo,
												enviado = :enviado
											WHERE codTransConsumo = :codTransConsumo ;
										";
									
            $codTransConsumo = $objetoIveTransaccionesConsumo->getcodTransConsumo();
			$codArticulo = $objetoIveTransaccionesConsumo->getcodArticulo();
			$codSucursal = $objetoIveTransaccionesConsumo->getcodSucursal();
			$cuentaSolicitud = $objetoIveTransaccionesConsumo->getcuentaSolicitud();
			$cantidadAprobadaConsumo = $objetoIveTransaccionesConsumo->getcantidadAprobadaConsumo();
			$fechaAprobadaConsumo = $objetoIveTransaccionesConsumo->getfechaAprobadaConsumo();
			$horaTransConsumo = $objetoIveTransaccionesConsumo->gethoraTransConsumo();
			$glosaTransConsumo = $objetoIveTransaccionesConsumo->getglosaTransConsumo();
			$cantidadTransConsumo = $objetoIveTransaccionesConsumo->getcantidadTransConsumo();
			$estado = $objetoIveTransaccionesConsumo->getestado();
			$anulado = $objetoIveTransaccionesConsumo->getanulado();
			$usuarioRegistro = $objetoIveTransaccionesConsumo->getusuarioRegistro();
			$usuarioConsumo = $objetoIveTransaccionesConsumo->getusuarioConsumo();
			$enviado = $objetoIveTransaccionesConsumo->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveTransaccionesConsumo);
           $cmd->bindParam(':codTransConsumo', $codTransConsumo);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cantidadAprobadaConsumo', $cantidadAprobadaConsumo);
			$cmd->bindParam(':fechaAprobadaConsumo', $fechaAprobadaConsumo);
			$cmd->bindParam(':horaTransConsumo', $horaTransConsumo);
			$cmd->bindParam(':glosaTransConsumo', $glosaTransConsumo);
			$cmd->bindParam(':cantidadTransConsumo', $cantidadTransConsumo);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':anulado', $anulado);
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
		public function eliminarIveTransaccionesConsumo($codTransConsumo)
		{
			$sqlEliminarIveTransaccionesConsumo = " DELETE FROM IveTransaccionesConsumo WHERE codTransConsumo = :codTransConsumo ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveTransaccionesConsumo);
					$cmd->bindParam(':codTransConsumo', $codTransConsumo);
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
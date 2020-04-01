<?php 

class ManejadorIveTransaccionesSolcitud
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveTransaccionesSolcitud(IveTransaccionesSolcitud $objetoIveTransaccionesSolcitud)
		{
			
			$sqlInsertarIveTransaccionesSolcitud = " INSERT INTO IveTransaccionesSolcitud(codTransaccionSolicitud,codArticulo,codAlmacen,codSucursal,cuentaSolicitud,cantidadTransSolicitud,fechaTransSolicitud,horaTransSolicitud,glosaTransSolicitud,cantidadAprobadaSolicitud,fechaAprobadaSolicitud,estado,anulado,usuarioRegistro,usuarioSolicitud,enviado) 
			VALUES (:codTransaccionSolicitud,:codArticulo,:codAlmacen,:codSucursal,:cuentaSolicitud,:cantidadTransSolicitud,:fechaTransSolicitud,:horaTransSolicitud,:glosaTransSolicitud,
,:cantidadAprobadaSolicitud,:fechaAprobadaSolicitud,:estado,anulado,:usuarioRegistro,:usuarioSolicitud,:enviado); ";
				
			$codTransaccionSolicitud = $objetoIveTransaccionesSolcitud->getcodTransaccionSolicitud();
			$codArticulo = $objetoIveTransaccionesSolcitud->getcodArticulo();
			$codAlmacen = $objetoIveTransaccionesSolcitud->getcodAlmacen();
			$codSucursal = $objetoIveTransaccionesSolcitud->getcodSucursal();
			$cuentaSolicitud = $objetoIveTransaccionesSolcitud->getcuentaSolicitud();
			$cantidadTransSolicitud = $objetoIveTransaccionesSolcitud->getcantidadTransSolicitud();
			$fechaTransSolicitud = $objetoIveTransaccionesSolcitud->getfechaTransSolicitud();
			$horaTransSolicitud = $objetoIveTransaccionesSolcitud->gethoraTransSolicitud();
			$glosaTransSolicitud = $objetoIveTransaccionesSolcitud->getglosaTransSolicitud();
			$cantidadAprobadaSolicitud = $objetoIveTransaccionesSolcitud->getcantidadAprobadaSolicitud();
			$fechaAprobadaSolicitud = $objetoIveTransaccionesSolcitud->getfechaAprobadaSolicitud();
			$estado = $objetoIveTransaccionesSolcitud->getestado();
			$anulado = $objetoIveTransaccionesSolcitud->getanulado();
			$usuarioRegistro = $objetoIveTransaccionesSolcitud->getusuarioRegistro();
			$usuarioSolicitud = $objetoIveTransaccionesSolcitud->getusuarioSolicitud();
			$enviado = $objetoIveTransaccionesSolcitud->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveTransaccionesSolcitud);
			$cmd->bindParam(':codTransaccionSolicitud', $codTransaccionSolicitud);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codAlmacen', $codAlmacen);			
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cantidadTransSolicitud', $cantidadTransSolicitud);
			$cmd->bindParam(':fechaTransSolicitud', $fechaTransSolicitud);
			$cmd->bindParam(':horaTransSolicitud', $horaTransSolicitud);
			$cmd->bindParam(':glosaTransSolicitud', $glosaTransSolicitud);
			$cmd->bindParam(':cantidadAprobadaSolicitud', $cantidadAprobadaSolicitud);
			$cmd->bindParam(':fechaAprobadaSolicitud', $fechaAprobadaSolicitud);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);
			$cmd->bindParam(':usuarioSolicitud', $usuarioSolicitud);
			$cmd->bindParam(':enviado', $enviado);

		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveTransaccionesSolcitud(IveTransaccionesSolcitud $objetoIveTransaccionesSolcitud, $codTransaccionSolicitud)
		{
				
			$sqlActualizarIveTransaccionesSolcitud = " UPDATE IveTransaccionesSolcitud
											SET codTransaccionSolicitud = :codTransaccionSolicitud,
												codArticulo = :codArticulo,
												codAlmacen = :codAlmacen,
												codSucursal = :codSucursal,
												cuentaSolicitud = :cuentaSolicitud,
												cantidadTransSolicitud = :cantidadTransSolicitud,
												fechaTransSolicitud = :fechaTransSolicitud,
												horaTransSolicitud = :horaTransSolicitud,
												glosaTransSolicitud = :glosaTransSolicitud,
												cantidadAprobadaSolicitud = :cantidadAprobadaSolicitud,
												fechaAprobadaSolicitud = :fechaAprobadaSolicitud,
												estado = :estado,
												anulado = :anulado,
												usuarioRegistro = :usuarioRegistro,
												usuarioSolicitud = :usuarioSolicitud,
												enviado = :enviado
											WHERE codTransaccionSolicitud = :codTransaccionSolicitud ;
										";
									
            $codTransaccionSolicitud = $objetoIveTransaccionesSolcitud->getcodTransaccionSolicitud();
			$codArticulo = $objetoIveTransaccionesSolcitud->getcodArticulo();
			$codAlmacen = $objetoIveTransaccionesSolcitud->getcodAlmacen();
			$codSucursal = $objetoIveTransaccionesSolcitud->getcodSucursal();
			$cuentaSolicitud = $objetoIveTransaccionesSolcitud->getcuentaSolicitud();
			$cantidadTransSolicitud = $objetoIveTransaccionesSolcitud->getcantidadTransSolicitud();
			$fechaTransSolicitud = $objetoIveTransaccionesSolcitud->getfechaTransSolicitud();
			$horaTransSolicitud = $objetoIveTransaccionesSolcitud->gethoraTransSolicitud();
			$glosaTransSolicitud = $objetoIveTransaccionesSolcitud->getglosaTransSolicitud();
			$cantidadAprobadaSolicitud = $objetoIveTransaccionesSolcitud->getcantidadAprobadaSolicitud();
			$fechaAprobadaSolicitud = $objetoIveTransaccionesSolcitud->getfechaAprobadaSolicitud();
			$estado = $objetoIveTransaccionesSolcitud->getestado();
			$anulado = $objetoIveTransaccionesSolcitud->getanulado();
			$usuarioRegistro = $objetoIveTransaccionesSolcitud->getusuarioRegistro();
			$usuarioSolicitud = $objetoIveTransaccionesSolcitud->getusuarioSolicitud();
			$enviado = $objetoIveTransaccionesSolcitud->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveTransaccionesSolcitud);
            $cmd->bindParam(':codTransaccionSolicitud', $codTransaccionSolicitud);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codAlmacen', $codAlmacen);			
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cantidadTransSolicitud', $cantidadTransSolicitud);
			$cmd->bindParam(':fechaTransSolicitud', $fechaTransSolicitud);
			$cmd->bindParam(':horaTransSolicitud', $horaTransSolicitud);
			$cmd->bindParam(':glosaTransSolicitud', $glosaTransSolicitud);
			$cmd->bindParam(':cantidadAprobadaSolicitud', $cantidadAprobadaSolicitud);
			$cmd->bindParam(':fechaAprobadaSolicitud', $fechaAprobadaSolicitud);
			$cmd->bindParam(':estado', $estado);
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);
			$cmd->bindParam(':usuarioSolicitud', $usuarioSolicitud);
			$cmd->bindParam(':enviado', $enviado);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveTransaccionesSolcitud($codTransaccionSolicitud)
		{
			$sqlEliminarIveTransaccionesSolcitud = " DELETE FROM IveTransaccionesSolcitud WHERE codTransaccionSolicitud = :codTransaccionSolicitud ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveTransaccionesSolcitud);
					$cmd->bindParam(':codTransaccionSolicitud', $codTransaccionSolicitud);
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
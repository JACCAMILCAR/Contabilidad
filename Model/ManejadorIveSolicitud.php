<?php 

class ManejadorIveSolicitud
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveSolicitud(IveSolicitud $objetoIveSolicitud)
		{
			
			$sqlInsertarIveSolicitud = " INSERT INTO IveSolicitud(codSolicitud,codSucursal,codTransaccionSolicitud,codArea,codAlmacen,codTransaccion,cuentaSolicitud,fechaSolicitud,descSolicitud,estado,anulado,usuarioRegistro,usuarioSolicitud,enviado) 
			VALUES (:codSolicitud,:codSucursal,:codTransaccionSolicitud,:codArea,:codAlmacen,:codTransaccion,:cuentaSolicitud,:fechaSolicitud,:descSolicitud,:estado,:anulado,:usuarioRegistro,:usuarioSolicitud,:enviado); ";
				
			$codSolicitud = $objetoIveSolicitud->getcodSolicitud();
			$codSucursal = $objetoIveSolicitud->getcodSucursal();
			$codTransaccionSolicitud = $objetoIveSolicitud->getcodTransaccionSolicitud();
			$codArea = $objetoIveSolicitud->getcodArea();
			$codAlmacen = $objetoIveSolicitud->getcodAlmacen();
			$codTransaccion = $objetoIveSolicitud->getcodTransaccion();
			$cuentaSolicitud = $objetoIveSolicitud->getcuentaSolicitud();
			$fechaSolicitud = $objetoIveSolicitud->getfechaSolicitud();
			$descSolicitud = $objetoIveSolicitud->getdescSolicitud();			
			$estado = $objetoIveSolicitud->getestado();
			$anulado = $objetoIveSolicitud->getanulado();
			$usuarioRegistro = $objetoIveSolicitud->getusuarioRegistro();
			$usuarioSolicitud = $objetoIveSolicitud->getusuarioSolicitud();
			$enviado = $objetoIveSolicitud->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveSolicitud);
			$cmd->bindParam(':codSolicitud', $codSolicitud);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codTransaccionSolicitud', $codTransaccionSolicitud);
			$cmd->bindParam(':codArea', $codArea);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':fechaSolicitud', $fechaSolicitud);
			$cmd->bindParam(':descSolicitud', $descSolicitud);
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

		public function actualizarIveSolicitud(IveSolicitud $objetoIveSolicitud, $codSolicitud)
		{
				
			$sqlActualizarIveSolicitud = " UPDATE IveSolicitud
											SET codSolicitud = :codSolicitud,
												codSucursal = :codSucursal,
												codTransaccionSolicitud = :codTransaccionSolicitud,
												codArea = :codArea,
												codAlmacen = :codAlmacen,
												codTransaccion = :codTransaccion,
												cuentaSolicitud = :cuentaSolicitud,
												fechaSolicitud = :fechaSolicitud,
												descSolicitud = :descSolicitud,
												estado = :estado,
												anulado = :anulado,
												usuarioRegistro = :usuarioRegistro,
												usuarioSolicitud = :usuarioSolicitud,
												enviado = :enviado
											WHERE codSolicitud = :codSolicitud ;
										";
									
            $codSolicitud = $objetoIveSolicitud->getcodSolicitud();
			$codSucursal = $objetoIveSolicitud->getcodSucursal();
			$codTransaccionSolicitud = $objetoIveSolicitud->getcodTransaccionSolicitud();
			$codArea = $objetoIveSolicitud->getcodArea();
			$codAlmacen = $objetoIveSolicitud->getcodAlmacen();
			$codTransaccion = $objetoIveSolicitud->getcodTransaccion();
			$cuentaSolicitud = $objetoIveSolicitud->getcuentaSolicitud();
			$fechaSolicitud = $objetoIveSolicitud->getfechaSolicitud();
			$descSolicitud = $objetoIveSolicitud->getdescSolicitud();			
			$estado = $objetoIveSolicitud->getestado();
			$anulado = $objetoIveSolicitud->getanulado();
			$usuarioRegistro = $objetoIveSolicitud->getusuarioRegistro();
			$usuarioSolicitud = $objetoIveSolicitud->getusuarioSolicitud();
			$enviado = $objetoIveSolicitud->getenviado();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveSolicitud);
            $cmd->bindParam(':codSolicitud', $codSolicitud);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codTransaccionSolicitud', $codTransaccionSolicitud);
			$cmd->bindParam(':codArea', $codArea);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':fechaSolicitud', $fechaSolicitud);
			$cmd->bindParam(':descSolicitud', $descSolicitud);
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
		public function eliminarIveSolicitud($codSolicitud)
		{
			$sqlEliminarIveSolicitud = " DELETE FROM IveSolicitud WHERE codSolicitud = :codSolicitud ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveSolicitud);
					$cmd->bindParam(':codSolicitud', $codSolicitud);
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
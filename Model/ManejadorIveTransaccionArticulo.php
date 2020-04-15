<?php 

class ManejadorIveTransaccionArticulo
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conectar();
		}

		public function registrarIveTransaccionArticulo(IveTransaccionArticulo $objetoIveTransaccionArticulo)
		{
			
			$sqlInsertarIveTransaccionArticulo = " INSERT INTO IveTransaccionArticulo ( codSucursal , codUnidad , codMoneda , codArticulo , codTransaccion , cuentaSolicitud , cuentaConsumo , fechaTransArticulo , horaTransArticulo , glosaTransArticulo , cantidadTransArticulo , costoUnidadArticulo , saldoCantidadArticulo , saldoCostoArticulo, tipoCambioMoneda, usuarioConsumo , usuarioRegistro , anulado , enviado ) 
			VALUES ( :codSucursal , :codUnidad , :codMoneda , :codArticulo , :codTransaccion , :cuentaSolicitud , :cuentaConsumo , :fechaTransArticulo , :horaTransArticulo , :glosaTransArticulo , :cantidadTransArticulo , :costoUnidadArticulo , :saldoCantidadArticulo , :saldoCostoArticulo , :tipoCambioMoneda , :usuarioConsumo , :usuarioRegistro , :anulado , :enviado ) ; ";
				
			// $codTransArticulo = $objetoIveTransaccionArticulo->getcodTransArticulo();
			$codSucursal = $objetoIveTransaccionArticulo->getcodSucursal();
			$codUnidad = $objetoIveTransaccionArticulo->getcodUnidad();
			$codMoneda = $objetoIveTransaccionArticulo->getcodMoneda();
			$codArticulo = $objetoIveTransaccionArticulo->getcodArticulo();
			$codTransaccion = $objetoIveTransaccionArticulo->getcodTransaccion();
			$cuentaSolicitud = $objetoIveTransaccionArticulo->getcuentaSolicitud();
			$cuentaConsumo = $objetoIveTransaccionArticulo->getcuentaConsumo();
			$fechaTransArticulo = $objetoIveTransaccionArticulo->getfechaTransArticulo();
			$horaTransArticulo = $objetoIveTransaccionArticulo->gethoraTransArticulo();			
			$glosaTransArticulo = $objetoIveTransaccionArticulo->getglosaTransArticulo();
			$cantidadTransArticulo = $objetoIveTransaccionArticulo->getcantidadTransArticulo();
			$costoUnidadArticulo = $objetoIveTransaccionArticulo->getcostoUnidadArticulo();
			$saldoCantidadArticulo = $objetoIveTransaccionArticulo->getsaldoCantidadArticulo();

			$saldoCostoArticulo = $objetoIveTransaccionArticulo->getsaldoCostoArticulo();
			$tipoCambioMoneda = $objetoIveTransaccionArticulo->gettipoCambioMoneda();
			$usuarioConsumo = $objetoIveTransaccionArticulo->getusuarioConsumo();
			$usuarioRegistro = $objetoIveTransaccionArticulo->getusuarioRegistro();
			$anulado = $objetoIveTransaccionArticulo->getanulado();
			$enviado = $objetoIveTransaccionArticulo->getenviado();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveTransaccionArticulo);
			// $cmd->bindParam(':codTransArticulo', $codTransArticulo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':codMoneda', $codMoneda);			
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':fechaTransArticulo', $fechaTransArticulo);
			$cmd->bindParam(':horaTransArticulo', $horaTransArticulo);
			$cmd->bindParam(':glosaTransArticulo', $glosaTransArticulo);
			$cmd->bindParam(':cantidadTransArticulo', $cantidadTransArticulo);
			$cmd->bindParam(':costoUnidadArticulo', $costoUnidadArticulo);
			$cmd->bindParam(':saldoCantidadArticulo', $saldoCantidadArticulo);
			$cmd->bindParam(':saldoCostoArticulo', $saldoCostoArticulo);
			$cmd->bindParam(':tipoCambioMoneda', $tipoCambioMoneda);
			$cmd->bindParam(':usuarioConsumo', $usuarioConsumo);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);			
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':enviado', $enviado);		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveTransaccionArticulo(IveTransaccionArticulo $objetoIveTransaccionArticulo, $codTransArticulo)
		{
				
			$sqlActualizarIveTransaccionArticulo = " UPDATE IveTransaccionArticulo
											SET codTransArticulo = :codTransArticulo,
												codSucursal = :codSucursal,
												codUnidad = :codUnidad,
												codMoneda = :codMoneda,
												codArticulo = :codArticulo,
												codTransaccion = :codTransaccion,
												cuentaSolicitud = :cuentaSolicitud,
												cuentaConsumo = :cuentaConsumo,
												fechaTransArticulo = :fechaTransArticulo,
												horaTransArticulo = :horaTransArticulo,
												glosaTransArticulo = :glosaTransArticulo,
												cantidadTransArticulo = :cantidadTransArticulo,
												costoUnidadArticulo = :costoUnidadArticulo,
												saldoCostoArticulo = :saldoCostoArticulo,
												tipoCambioMoneda = :tipoCambioMoneda,
												usuarioConsumo = :usuarioConsumo,
												usuarioRegistro = :usuarioRegistro,
												anulado = :anulado,
												enviado = :enviado
											WHERE codTransArticulo = :codTransArticulo ;
										";
									
            $codTransArticulo = $objetoIveTransaccionArticulo->getcodTransArticulo();
			$codSucursal = $objetoIveTransaccionArticulo->getcodSucursal();
			$codUnidad = $objetoIveTransaccionArticulo->getcodUnidad();
			$codMoneda = $objetoIveTransaccionArticulo->getcodMoneda();
			$codArticulo = $objetoIveTransaccionArticulo->getcodArticulo();
			$codTransaccion = $objetoIveTransaccionArticulo->getcodTransaccion();
			$cuentaSolicitud = $objetoIveTransaccionArticulo->getcuentaSolicitud();
			$cuentaConsumo = $objetoIveTransaccionArticulo->getcuentaConsumo();
			$fechaTransArticulo = $objetoIveTransaccionArticulo->getfechaTransArticulo();
			$horaTransArticulo = $objetoIveTransaccionArticulo->gethoraTransArticulo();			
			$glosaTransArticulo = $objetoIveTransaccionArticulo->getglosaTransArticulo();
			$cantidadTransArticulo = $objetoIveTransaccionArticulo->getcantidadTransArticulo();
			$costoUnidadArticulo = $objetoIveTransaccionArticulo->getcostoUnidadArticulo();
			$saldoCostoArticulo = $objetoIveTransaccionArticulo->getsaldoCantidadArticulo();
			$tipoCambioMoneda = $objetoIveTransaccionArticulo->gettipoCambioMoneda();
			$usuarioConsumo = $objetoIveTransaccionArticulo->getusuarioConsumo();
			$usuarioRegistro = $objetoIveTransaccionArticulo->getusuarioRegistro();
			$anulado = $objetoIveTransaccionArticulo->getanulado();
			$enviado = $objetoIveTransaccionArticulo->getenviado();
			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveTransaccionArticulo);
            $cmd->bindParam(':codTransArticulo', $codTransArticulo);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':codMoneda', $codMoneda);			
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codTransaccion', $codTransaccion);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':fechaTransArticulo', $fechaTransArticulo);
			$cmd->bindParam(':horaTransArticulo', $horaTransArticulo);
			$cmd->bindParam(':glosaTransArticulo', $glosaTransArticulo);
			$cmd->bindParam(':cantidadTransArticulo', $cantidadTransArticulo);
			$cmd->bindParam(':costoUnidadArticulo', $costoUnidadArticulo);
			$cmd->bindParam(':saldoCostoArticulo', $saldoCostoArticulo);
			$cmd->bindParam(':tipoCambioMoneda', $tipoCambioMoneda);
			$cmd->bindParam(':usuarioConsumo', $usuarioConsumo);
			$cmd->bindParam(':usuarioRegistro', $usuarioRegistro);			
			$cmd->bindParam(':anulado', $anulado);
			$cmd->bindParam(':enviado', $enviado);

			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveTransaccionArticulo($codTransArticulo)
		{
			$sqlEliminarIveTransaccionArticulo = " DELETE FROM IveTransaccionArticulo WHERE codTransArticulo = :codTransArticulo ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveTransaccionArticulo);
					$cmd->bindParam(':codTransArticulo', $codTransArticulo);
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
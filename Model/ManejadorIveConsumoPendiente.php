<?php 

class ManejadorIveConsumoPendiente
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveConsumoPendiente(IveConsumoPendiente $objetoIveConsumoPendiente)
		{
			
			$sqlInsertarIveConsumoPendiente = " INSERT INTO IveConsumoPendiente(codConsumoPendiente,codArticulo,codAlmacen,cantidadAprobada,fechaAprobada,cantidadConsumo,fechaConsumo,cuentaSolicitud,cuentaConsumo,estado,codSucursal,enviado) 
			VALUES (:codConsumoPendiente,:codArticulo,:codAlmacen,:cantidadAprobada,:fechaAprobada,:cantidadConsumo,:fechaConsumo,:cuentaSolicitud,:cuentaConsumo,:estado,:codSucursal,:enviado); ";
				
			$codConsumoPendiente = $objetoIveConsumoPendiente->getcodConsumoPendiente();
			$codArticulo = $objetoIveConsumoPendiente->getcodArticulo();
			$codAlmacen = $objetoIveConsumoPendiente->getcodAlmacen();
			$cantidadAprobada = $objetoIveConsumoPendiente->getcantidadAprobada();
			$fechaAprobada = $objetoIveConsumoPendiente->getfechaAprobada();
			$cantidadConsumo = $objetoIveConsumoPendiente->getcantidadConsumo();
			$fechaConsumo = $objetoIveConsumoPendiente->getfechaConsumo();
			$cuentaSolicitud = $objetoIveConsumoPendiente->getcuentaSolicitud();
			$cuentaConsumo = $objetoIveConsumoPendiente->getcuentaConsumo();
			$estado = $objetoIveConsumoPendiente->getestado();			
			$codSucursal = $objetoIveConsumoPendiente->getcodSucursal();
            $enviado = $objetoIveConsumoPendiente->getenviado();
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveConsumoPendiente);
			$cmd->bindParam(':codConsumoPendiente', $codConsumoPendiente);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':cantidadAprobada', $cantidadAprobada);
			$cmd->bindParam(':fechaAprobada', $fechaAprobada);
			$cmd->bindParam(':cantidadConsumo', $cantidadConsumo);
			$cmd->bindParam(':fechaConsumo', $fechaConsumo);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':estado', $estado);
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

		public function actualizarIveConsumoPendiente(IveConsumoPendiente $objetoIveConsumoPendiente, $codConsumoPendiente)
		{
				
			$sqlActualizarIveConsumoPendiente = " UPDATE IveConsumoPendiente
											SET codConsumoPendiente = :codConsumoPendiente,
												codArticulo = :codArticulo,
												codAlmacen = :codAlmacen,
												cantidadAprobada = :cantidadAprobada,
												fechaAprobada = :fechaAprobada,
												cantidadConsumo = :cantidadConsumo,
												fechaConsumo = :fechaConsumo,
												cuentaSolicitud = :cuentaSolicitud,
												cuentaConsumo = :cuentaConsumo,
												estado = :estado,
												codSucursal = :codSucursal
											WHERE codConsumoPendiente = :codConsumoPendiente ;
										";
									
            $codConsumoPendiente = $objetoIveConsumoPendiente->getcodConsumoPendiente();
			$codArticulo = $objetoIveConsumoPendiente->getcodArticulo();
			$codAlmacen = $objetoIveConsumoPendiente->getcodAlmacen();
			$cantidadAprobada = $objetoIveConsumoPendiente->getcantidadAprobada();
			$fechaAprobada = $objetoIveConsumoPendiente->getfechaAprobada();
			$cantidadConsumo = $objetoIveConsumoPendiente->getcantidadConsumo();
			$fechaConsumo = $objetoIveConsumoPendiente->getfechaConsumo();
			$cuentaSolicitud = $objetoIveConsumoPendiente->getcuentaSolicitud();
			$cuentaConsumo = $objetoIveConsumoPendiente->getcuentaConsumo();
			$estado = $objetoIveConsumoPendiente->getestado();			
			$codSucursal = $objetoIveConsumoPendiente->getcodSucursal();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveConsumoPendiente);
            $cmd->bindParam(':codConsumoPendiente', $codConsumoPendiente);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':cantidadAprobada', $cantidadAprobada);
			$cmd->bindParam(':fechaAprobada', $fechaAprobada);
			$cmd->bindParam(':cantidadConsumo', $cantidadConsumo);
			$cmd->bindParam(':fechaConsumo', $fechaConsumo);
			$cmd->bindParam(':cuentaSolicitud', $cuentaSolicitud);
			$cmd->bindParam(':cuentaConsumo', $cuentaConsumo);
			$cmd->bindParam(':estado', $estado);
		    $cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveConsumoPendiente($codConsumoPendiente)
		{
			$sqlEliminarIveConsumoPendiente = " DELETE FROM IveConsumoPendiente WHERE codConsumoPendiente = :codConsumoPendiente ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveConsumoPendiente);
					$cmd->bindParam(':codConsumoPendiente', $codConsumoPendiente);
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
<?php 

class ManejadorIveGrupoAlmacen
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveGrupoAlmacen(IveGrupoAlmacen $objetoIveGrupoAlmacen)
		{
			
			$sqlInsertarIveGrupoAlmacen = " INSERT INTO IveGrupoAlmacen(codGrupoAlmacen,codSucursal,codConsumoPendiente,codMoneda,codAlmacen,descGrupoAlmacen,cuentaTransArticulo,cuentaGrupoArticulo,cuentaConsumoInt,cuentaDiferenciaArticulo) 
			VALUES (:codGrupoAlmacen,:codSucursal,:codConsumoPendiente,:codMoneda,:codAlmacen,:descGrupoAlmacen,:cuentaTransArticulo,:cuentaGrupoArticulo,:cuentaConsumoInt,:cuentaDiferenciaArticulo); ";
				
			$codGrupoAlmacen = $objetoIveGrupoAlmacen->getcodGrupoAlmacen();
			$codSucursal = $objetoIveGrupoAlmacen->getcodSucursal();
			$codConsumoPendiente = $objetoIveGrupoAlmacen->getcodConsumoPendiente();
			$codMoneda = $objetoIveGrupoAlmacen->getcodMoneda();
			$codAlmacen = $objetoIveGrupoAlmacen->getcodAlmacen();
			$descGrupoAlmacen = $objetoIveGrupoAlmacen->getdescGrupoAlmacen();
			$cuentaTransArticulo = $objetoIveGrupoAlmacen->getcuentaTransArticulo();
			$cuentaGrupoArticulo = $objetoIveGrupoAlmacen->getcuentaGrupoArticulo();
			$cuentaConsumoInt = $objetoIveGrupoAlmacen->getcuentaConsumoInt();
			$cuentaDiferenciaArticulo = $objetoIveGrupoAlmacen->getcuentaDiferenciaArticulo();
			
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveGrupoAlmacen);
			$cmd->bindParam(':codGrupoAlmacen', $codGrupoAlmacen);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codConsumoPendiente', $codConsumoPendiente);
			$cmd->bindParam(':codMoneda', $codMoneda);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descGrupoAlmacen', $descGrupoAlmacen);
			$cmd->bindParam(':cuentaTransArticulo', $cuentaTransArticulo);
			$cmd->bindParam(':cuentaGrupoArticulo', $cuentaGrupoArticulo);
			$cmd->bindParam(':saldoCantidadArticulo', $saldoCantidadArticulo);
			$cmd->bindParam(':cuentaDiferenciaArticulo', $cuentaDiferenciaArticulo);
		
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function

		public function actualizarIveGrupoAlmacen(IveGrupoAlmacen $objetoIveGrupoAlmacen, $codGrupoAlmacen)
		{
				
			$sqlActualizarIveGrupoAlmacen = " UPDATE IveGrupoAlmacen
											SET codGrupoAlmacen = :codGrupoAlmacen,
												codSucursal = :codSucursal,
												codConsumoPendiente = :codConsumoPendiente,
												codMoneda = :codMoneda,
												codAlmacen = :codAlmacen,
												descGrupoAlmacen = :descGrupoAlmacen,
												cuentaTransArticulo = :cuentaTransArticulo,
												cuentaGrupoArticulo = :cuentaGrupoArticulo,
												saldoCantidadArticulo = :saldoCantidadArticulo,
												cuentaDiferenciaArticulo = :cuentaDiferenciaArticulo
											WHERE codGrupoAlmacen = :codGrupoAlmacen ;
										";
									
            $codGrupoAlmacen = $objetoIveGrupoAlmacen->getcodGrupoAlmacen();
			$codSucursal = $objetoIveGrupoAlmacen->getcodSucursal();
			$codConsumoPendiente = $objetoIveGrupoAlmacen->getcodConsumoPendiente();
			$codMoneda = $objetoIveGrupoAlmacen->getcodMoneda();
			$codAlmacen = $objetoIveGrupoAlmacen->getcodAlmacen();
			$descGrupoAlmacen = $objetoIveGrupoAlmacen->getdescGrupoAlmacen();
			$cuentaTransArticulo = $objetoIveGrupoAlmacen->getcuentaTransArticulo();
			$cuentaGrupoArticulo = $objetoIveGrupoAlmacen->getcuentaGrupoArticulo();
			$cuentaConsumoInt = $objetoIveGrupoAlmacen->getcuentaConsumoInt();
			$cuentaDiferenciaArticulo = $objetoIveGrupoAlmacen->getcuentaDiferenciaArticulo();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveGrupoAlmacen);
           $cmd->bindParam(':codGrupoAlmacen', $codGrupoAlmacen);
			$cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->bindParam(':codConsumoPendiente', $codConsumoPendiente);
			$cmd->bindParam(':codMoneda', $codMoneda);			
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descGrupoAlmacen', $descGrupoAlmacen);
			$cmd->bindParam(':cuentaTransArticulo', $cuentaTransArticulo);
			$cmd->bindParam(':cuentaGrupoArticulo', $cuentaGrupoArticulo);
			$cmd->bindParam(':cuentaConsumoInt', $cuentaConsumoInt);
			$cmd->bindParam(':cuentaDiferenciaArticulo', $cuentaDiferenciaArticulo);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveGrupoAlmacen($codGrupoAlmacen)
		{
			$sqlEliminarIveGrupoAlmacen = " DELETE FROM IveGrupoAlmacen WHERE codGrupoAlmacen = :codGrupoAlmacen ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveGrupoAlmacen);
					$cmd->bindParam(':codGrupoAlmacen', $codGrupoAlmacen);
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
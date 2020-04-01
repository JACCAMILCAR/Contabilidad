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
				
			$codTransaccion = $objetoIveGrupoAlmacen->getcodTransaccion();
			$codSucursal = $objetoIveGrupoAlmacen->getcodSucursal();
			$descCodTransaccion = $objetoIveGrupoAlmacen->getdescCodTransaccion();
			$tipoCodTransaccion = $objetoIveGrupoAlmacen->gettipoCodTransaccion();
			$conAsientos = $objetoIveGrupoAlmacen->getconAsientos();
			$enviado = $objetoIveGrupoAlmacen->getenviado();
				
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveGrupoAlmacen);
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
									
            $codTransaccion = $objetoIveGrupoAlmacen->getcodTransaccion();
			$codSucursal = $objetoIveGrupoAlmacen->getcodSucursal();
			$descCodTransaccion = $objetoIveGrupoAlmacen->getdescCodTransaccion();
			$tipoCodTransaccion = $objetoIveGrupoAlmacen->gettipoCodTransaccion();
			$conAsientos = $objetoIveGrupoAlmacen->getconAsientos();
			$enviado = $objetoIveGrupoAlmacen->getenviado();
			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveGrupoAlmacen);
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
					$cmd = $this->conexion->prepare($sqlEliminarIveGrupoAlmacen);
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
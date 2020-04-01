<?php 

class ManejadorIveArticulo
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarIveArticulo(IveArticulo $objetoIveArticulo)
		{
			
			$sqlInsertarIveArticulo = " INSERT INTO IveArticulo(codArticulo,codMoneda,codUnidad,codAlmacen,descArticulo,glosaArticulo,glosaUnidadArticulo,saldoCantidadArticulo,saldoCostoArticulo,stockMinimoArticulo,stockMaximoArticulo,codSucursal,enviado) 
			VALUES (:codArticulo,:codMoneda,:codUnidad,:codAlmacen,:descArticulo,:glosaArticulo,:glosaUnidadArticulo,:saldoCantidadArticulo,:saldoCostoArticulo,:stockMinimoArticulo,:stockMaximoArticulo,:codSucursal,:enviado); ";
				
			$codArticulo = $objetoIveArticulo->getcodArticulo();
			$codMoneda = $objetoIveArticulo->getcodMoneda();
			$codUnidad = $objetoIveArticulo->getcodUnidad();
			$codAlmacen = $objetoIveArticulo->getcodAlmacen();
			$descArticulo = $objetoIveArticulo->getdescArticulo();
			$glosaArticulo = $objetoIveArticulo->getglosaArticulo();
			$glosaUnidadArticulo = $objetoIveArticulo->getglosaUnidadArticulo();
			$saldoCantidadArticulo = $objetoIveArticulo->getsaldoCantidadArticulo();
			$saldoCostoArticulo = $objetoIveArticulo->getsaldoCostoArticulo();
			$stockMinimoArticulo = $objetoIveArticulo->getstockMinimoArticulo();
			$stockMaximoArticulo = $objetoIveArticulo->getstockMaximoArticulo();
			$codSucursal = $objetoIveArticulo->getcodSucursal();
            $enviado = $objetoIveArticulo->getenviado();
                    	
			try{
			$cmd = $this->conexion->prepare($sqlInsertarIveArticulo);
			$cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codMoneda', $codMoneda);
			$cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descArticulo', $descArticulo);
			$cmd->bindParam(':glosaArticulo', $glosaArticulo);
			$cmd->bindParam(':glosaUnidadArticulo', $glosaUnidadArticulo);
			$cmd->bindParam(':saldoCantidadArticulo', $saldoCantidadArticulo);
			$cmd->bindParam(':saldoCostoArticulo', $saldoCostoArticulo);
			$cmd->bindParam(':stockMinimoArticulo', $stockMinimoArticulo);
			$cmd->bindParam(':stockMaximoArticulo', $stockMaximoArticulo);
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

		public function actualizarIveArticulo(IveArticulo $objetoIveArticulo, $codArticulo)
		{
				
			$sqlActualizarIveArticulo = " UPDATE IveArticulo
											SET codArticulo = :codArticulo,
												codMoneda = :codMoneda,
												codUnidad = :codUnidad,
												codAlmacen = :codAlmacen,
												descArticulo = :descArticulo,
												glosaArticulo = :glosaArticulo,
												glosaUnidadArticulo = :glosaUnidadArticulo,
												saldoCantidadArticulo = :saldoCantidadArticulo,
												saldoCostoArticulo = :saldoCostoArticulo,
												stockMinimoArticulo = :stockMinimoArticulo,
												stockMaximoArticulo = :stockMaximoArticulo,
												codSucursal = :codSucursal
											WHERE codArticulo = :codArticulo ;
										";
									
            $codArticulo = $objetoIveArticulo->getcodArticulo();
			$codMoneda = $objetoIveArticulo->getcodMoneda();
			$codUnidad = $objetoIveArticulo->getcodUnidad();
			$codAlmacen = $objetoIveArticulo->getcodAlmacen();
			$descArticulo = $objetoIveArticulo->getdescArticulo();
			$glosaArticulo = $objetoIveArticulo->getglosaArticulo();
			$glosaUnidadArticulo = $objetoIveArticulo->getglosaUnidadArticulo();
			$saldoCantidadArticulo = $objetoIveArticulo->getsaldoCantidadArticulo();
			$saldoCostoArticulo = $objetoIveArticulo->getsaldoCostoArticulo();
			$stockMinimoArticulo = $objetoIveArticulo->getstockMinimoArticulo();
			$stockMaximoArticulo = $objetoIveArticulo->getstockMaximoArticulo();
			$codSucursal = $objetoIveArticulo->getcodSucursal();

			try{
			$cmd = $this->conexion->prepare($sqlActualizarIveArticulo);
            $cmd->bindParam(':codArticulo', $codArticulo);
			$cmd->bindParam(':codMoneda', $codMoneda);
			$cmd->bindParam(':codUnidad', $codUnidad);
			$cmd->bindParam(':codAlmacen', $codAlmacen);
			$cmd->bindParam(':descArticulo', $descArticulo);
			$cmd->bindParam(':glosaArticulo', $glosaArticulo);
			$cmd->bindParam(':glosaUnidadArticulo', $glosaUnidadArticulo);
			$cmd->bindParam(':saldoCantidadArticulo', $saldoCantidadArticulo);
			$cmd->bindParam(':saldoCostoArticulo', $saldoCostoArticulo);
			$cmd->bindParam(':stockMinimoArticulo', $stockMinimoArticulo);
			$cmd->bindParam(':stockMaximoArticulo', $stockMaximoArticulo);
		    $cmd->bindParam(':codSucursal', $codSucursal);
			$cmd->execute();
			return 1;
			}catch(PDOException $e){
				echo 'ERROR: No se logro realizar la actualizacion - '.$e->getMesage();
				exit();
				return 0;
			}
		}//end function
		public function eliminarIveArticulo($codArticulo)
		{
			$sqlEliminarIveArticulo = " DELETE FROM IveArticulo WHERE codArticulo = :codArticulo ; ";

			try{
					$cmd = $this->conexion->prepare($sqlEliminarIveArticulo);
					$cmd->bindParam(':codArticulo', $codArticulo);
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
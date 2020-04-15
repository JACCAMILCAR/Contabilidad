<?php 

class BuscadorIveUnidad
	{
    	private $conexion;

		function __construct()
		{
			$this->conexion =  new Conectar();
        }

        public function listaUnidad()
			{
				
				$sqlListaC = "
	            SELECT codUnidad, descUnidad
	            FROM IveUnidad
	            GROUP BY codUnidad;
									";

				$cmd = $this->conexion->prepare($sqlListaC);
				$cmd->execute();
				
				$listaCargoConsulta = $cmd->fetchAll();
	          	$listaUnidad = array();
	          	$i = 0;

	            foreach($listaCargoConsulta as $list){
	            	  $objetoCargo = new IveUnidad(); 
	            	  $objetoCargo->setcodUnidad($list['codUnidad']);
	                  $objetoCargo->setdescUnidad($list['descUnidad']);
	            	  $listaUnidad[$i] = $objetoCargo;
	            	  $i++;
			    }

				return $listaUnidad;
			}

			public function listaConfigCodTransaccion()
			{
				
				$sqlListaC = "
	            SELECT codTransaccion , descCodTransaccion
	            FROM IveConfigCodTransaccion
	            GROUP BY codTransaccion;
									";

				$cmd = $this->conexion->prepare($sqlListaC);
				$cmd->execute();

				$listaCargoConsulta = $cmd->fetchAll();
	          	$listaConfigCodTransaccion = array();
	          	$i = 0;

	            foreach($listaCargoConsulta as $list){
	            	  $objetoIveConfigCodTransaccion = new IveConfigCodTransaccion(); 
	            	  $objetoIveConfigCodTransaccion->setcodTransaccion($list['codTransaccion']);
	                  $objetoIveConfigCodTransaccion->setdescCodTransaccion($list['descCodTransaccion']);
	            	  $listaConfigCodTransaccion[$i] = $objetoIveConfigCodTransaccion;
	            	  $i++;
			    }
				return $listaConfigCodTransaccion;
			}

    }

?>

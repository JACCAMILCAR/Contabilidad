<?php 

class BuscadorInventario
	{
	    	private $conexion;

			function __construct()
			{
				$this->conexion =  new Conectar();
	        }


			public function listaArticulo()
			{

					$sqlListaArticulo = "
					SELECT IA.codArticulo as 'codArticulo', IA.codMoneda, IA.codUnidad, IA.codAlmacen,
					IA.descArticulo, IA.glosaArticulo, IA.saldoCantidadArticulo, IA.stockMinimoArticulo, IA.stockMaximoArticulo, ITA.fechaTransArticulo
					FROM IveArticulo IA join IveTransaccionArticulo ITA
					WHERE IA.codArticulo = ITA.codTransArticulo
					ORDER BY ITA.fechaTransArticulo,IA.codArticulo, ITA.codTransArticulo;
										";
					$cmd = $this->conexion->prepare($sqlListaArticulo);
					$cmd->execute();
					
					$listaDeArticuloDeLaConsulta = $cmd->fetchAll();
					
					$listaArticulo = array();
					$i = 0;

		            foreach($listaDeArticuloDeLaConsulta as $registroArticulo){
		                    $objetoArticulo = new IveArticulo();	
			            	$objetoArticulo->setcodArticulo($registroArticulo['codArticulo']);	
			            	$objetoArticulo->setdescArticulo($registroArticulo['descArticulo']);
				            $objetoArticulo->setsaldoCantidadArticulo($registroArticulo['saldoCantidadArticulo']);	
				            $objetoArticulo->setstockMinimoArticulo($registroArticulo['stockMinimoArticulo']);
				             $objetoArticulo->setstockMaximoArticulo($registroArticulo['stockMaximoArticulo']);
				             $objetoArticulo->setfechaTransArticulo($registroArticulo['fechaTransArticulo']);
							$listaArticulo[$i] = $objetoArticulo;
							  $i++;
				    }

					return $listaArticulo;
		    }
		    //end function for empleado

		    public function listaIveArticulo()
			{
					// $objetoIveArticulo = new IveArticulo();

					$sqlListaArticul = "
					SELECT codArticulo , descArticulo , saldoCantidadArticulo , stockMinimoArticulo , stockMaximoArticulo
					FROM IveArticulo
					ORDER BY codArticulo ; 
										";
					$cmd = $this->conexion->prepare($sqlListaArticul);
					$cmd->execute();
					$listaDeArticulDeLaConsulta = $cmd->fetchAll();
					var_dump($listaDeArticulDeLaConsulta);
					$listaIveArticulo = array();
					var_dump($listaIveArticulo);
					$i = 0;

		            foreach($listaDeArticulDeLaConsulta as $registroIveArticulo) {

		                    $objetoIveArticulo = new IveArticulo();

			    //         	$objetoIveArticulo->setcodArticulo($registroIveArticulo['codArticulo']);	
			    //         	$objetoIveArticulo->setdescArticulo($registroIveArticulo['descArticulo']);
				   //          $objetoIveArticulo->setsaldoCantidadArticulo($registroIveArticulo['saldoCantidadArticulo']);	
				   //          $objetoIveArticulo->setstockMinimoArticulo($registroIveArticulo['stockMinimoArticulo']);
				   //          $objetoIveArticulo->setstockMaximoArticulo($registroIveArticulo['stockMaximoArticulo']);
							// $listaIveArticulo[$i] = $objetoIveArticulo;
							//   $i++;
				    }

					return $listaIveArticulo;
		    }
	   
	}

	// $co = new BuscadorInventario();

?>

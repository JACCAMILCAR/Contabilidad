<?php 

class BuscadorIveArticulo 
	{
    	private $conexion;

		function __construct()
		{
			$this->conexion =  new Conectar();
        }
       
			public function ultimoIdArticulo()
			{  

				$idArticulo = 0;
				$sqlIdEstudiante = "
										select codArticulo from IveArticulo order by codArticulo desc limit 1;
									"; 
				$cmd = $this->conexion->prepare($sqlIdEstudiante);
				$cmd->execute(); 

				$idEstudianteDeLaConsulta = $cmd->fetch();
	          	
	            if($idEstudianteDeLaConsulta){
	            	
	            	$idArticulo = $idEstudianteDeLaConsulta['codArticulo'];

		 	    }
				return $idArticulo;
			}

			public function FechaActual()
			{  

				$fechaActual = 0;
				$sqlActual = " SELECT DATE(now()) as horaFecha;
									"; 
				$cmd = $this->conexion->prepare($sqlActual);
				$cmd->execute(); 
				$actualDeLaConsulta = $cmd->fetch();
	          	
	            if($actualDeLaConsulta){
	            	
	            	$fechaActual = $actualDeLaConsulta['horaFecha'];

		 	    }
				return $fechaActual;
			}

			public function HoraActual()
			{  

				$horaFechaActual = 0;
				$sqlActual = " SELECT TIME(now()) as horaFecha;
									"; 
				$cmd = $this->conexion->prepare($sqlActual);
				$cmd->execute(); 
				$actualDeLaConsulta = $cmd->fetch();
	          	
	            if($actualDeLaConsulta){
	            	
	            	$horaFechaActual = $actualDeLaConsulta['horaFecha'];

		 	    }
				return $horaFechaActual;
			}

			public function listaSucursal()
			{
				
				$sqlListaC = "
	            SELECT codSucursal, nombreSucursal
	            FROM Sucursal
	            GROUP BY codSucursal;
									";
				$cmd = $this->conexion->prepare($sqlListaC);
				$cmd->execute();
				$listaCargoConsulta = $cmd->fetchAll();
	          	$listaSucursal = array();
	          	$i = 0;
	            foreach($listaCargoConsulta as $list){
	            	  $objetoCargo = new Sucursal(); 
	            	  $objetoCargo->setcodSucursal($list['codSucursal']);
	                  $objetoCargo->setnombreSucursal($list['nombreSucursal']);
	            	  $listaSucursal[$i] = $objetoCargo;
	            	  $i++;
			    }
				return $listaSucursal;
			}

			public function listaAlmacen()
			{
				
				$sqlListaC = "
	            SELECT codAlmacen, descAlmacen
	            FROM IveAlmacen
	            GROUP BY codAlmacen;
									";
				$cmd = $this->conexion->prepare($sqlListaC);
				$cmd->execute();
				$listaCargoConsulta = $cmd->fetchAll();
	          	$listaAlmacen = array();
	          	$i = 0;
	            foreach($listaCargoConsulta as $list){
	            	  $objetoCargo = new IveAlmacen(); 
	            	  $objetoCargo->setcodAlmacen($list['codAlmacen']);
	                  $objetoCargo->setdescAlmacen($list['descAlmacen']);
	            	  $listaAlmacen[$i] = $objetoCargo;
	            	  $i++;
			    }
				return $listaAlmacen;
			}

			public function listaGrupoAlmacen()
			{
				
				$sqlListaC = "
	            SELECT codGrupoAlmacen, descGrupoAlmacen
	            FROM IveGrupoAlmacen
	            GROUP BY codGrupoAlmacen;
									";
				$cmd = $this->conexion->prepare($sqlListaC);
				$cmd->execute();
				$listaCargoConsulta = $cmd->fetchAll();
	          	$listaGrupoAlmacen = array();
	          	$i = 0;
	            foreach($listaGrupoAlmacen  as $list){
	            	  $objetoCargo = new IveGrupoAlmacen(); 
	            	  $objetoCargo->setcodGrupoAlmacen($list['codGrupoAlmacen']);
	                  $objetoCargo->setdescGrupoAlmacen($list['descGrupoAlmacen']);
	            	  $listaGrupoAlmacen[$i] = $objetoCargo;
	            	  $i++;
			    }
				return $listaGrupoAlmacen;
			}

			
   }

?>


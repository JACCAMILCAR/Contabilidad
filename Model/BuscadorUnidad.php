<?php
  class BuscadorUnidad
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
        }
        
		public function listaUnidad()
		{
			
            $sqlListaUnidad = "Select u.codUnidad, u.descUnidad, u.enviado, s.nombreSucursal
            FROM IveUnidad u, Sucursal s
            Where u.codSucursal= s.codSucursal
            ORDER BY u.codUnidad";
            
			$cmd = $this->conexion->prepare($sqlListaC);
			$cmd->execute();
			$listaUnidadConsulta = $cmd->fetchAll();
          	$listaUnidadReporte = array();
          	$i = 0;
          	//verificar si hay datos y cargarlos
            foreach($listaUnidadConsulta as $list){
            	  $objetoSucursal = new Cargo(); 
            	  $objetoSucursal->setcodUnidad($list['codUnidad']);
                  $objetoSucursal->setdescUnidad($list['descUnidad']);
                  $objetoSucursal->setenviado($list['enviado']);
                  $objetoSucursal->setnombreSucursal($list['nombreSucursal']);
                
            	  $listaUnidadReporte[$i] = $objetoSucursal;
            	  $i++;
		    }
			return $listaUnidadReporte;
		}//end function

	}//end class

?>
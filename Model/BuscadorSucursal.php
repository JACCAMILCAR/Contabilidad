<?php
  class BuscadorSucursal
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
        }
        
		public function listaSucursal()
		{
			
            $sqlListaSucursal = 
            " Select s.codSucursal, s.nombreSucursal
            FROM Sucursal s
            ORDER BY s.codSucursal ";
            
			$cmd = $this->conexion->prepare($sqlListaC);
			$cmd->execute();
			$listaCargoConsulta = $cmd->fetchAll();
          	$listaSucursalReporte = array();
          	$i = 0;
          	//verificar si hay datos y cargarlos
            foreach($listaCargoConsulta as $list){
            	  $objetoSucursal = new Cargo(); 
            	  $objetoSucursal->setcodSucursal($list['codSucursal']);
                  $objetoSucursal->setnombreSucursal($list['nombreSucursal']);
            	  $listaSucursalReporte[$i] = $objetoSucursal;
            	  $i++;
		    }
			return $listaSucursalReporte;
		}//end function

	}//end class

?>
<?php
  class BuscadorAlmacen
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
        }
        
		public function listaAlmacen()
		{
			
			$sqlListaAlmacen = "
            SELECT a.codAlmacen, a.descAlmacen , s.nombreSucursal
            FROM Almacen a, Sucursal s
            WHERE a.codSucursal = s.codSucursal
            ORDER BY a.conAlmacen
								";
			$cmd = $this->conexion->prepare($sqlListaC);
			$cmd->execute();
			$listaAlmacenConsulta = $cmd->fetchAll();
          	$listaAlmacenReporte = array();
          	$i = 0;
          	//verificar si hay datos y cargarlos
            foreach($listaAlmacenConsulta as $list){
            	  $objetoAlmacen = new Cargo(); 
            	  $objetoAlmacen->setcodAlmacen($list['codAlmacen']);
                  $objetoAlmacen->setdescAlmacen($list['descAlmacen']);
            	  $listaAlmacenReporte[$i] = $objetoAlmacen;
            	  $i++;
		    }
			return $listaAlmacenReporte;
		}//end function

	}//end class

?>
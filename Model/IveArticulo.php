<?php

    class IveArticulo
    {
        public $codArticulo;
        public $codMoneda;
        public $codUnidad;
        public $codAlmacen;
        public $descArticulo;
        public $glosaArticulo;
        public $glosaUnidadArticulo;
        public $saldoCantidadArticulo;
        public $saldoCostoArticulo;
        public $stockMinimoArticulo;
        public $stockMaximoArticulo;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodArticulo($codArticulo){$this->codArticulo = $codArticulo;}
        public function setcodMoneda($codMoneda){$this->codMoneda = $codMoneda;}
        public function setcodUnidad($codUnidad){$this->codUnidad = $codUnidad;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setdescArticulo($descArticulo){$this->descArticulo = $descArticulo;}
        public function setglosaArticulo($glosaArticulo){$this->glosaArticulo = $glosaArticulo;}
        public function setglosaUnidadArticulo($glosaUnidadArticulo){$this->glosaUnidadArticulo = $glosaUnidadArticulo;}
        public function setsaldoCantidadArticulo($saldoCantidadArticulo){$this->saldoCantidadArticulo = $saldoCantidadArticulo;}
        public function setsaldoCostoArticulo($saldoCostoArticulo){$this->saldoCostoArticulo = $saldoCostoArticulo;}
        public function setstockMinimoArticulo($stockMinimoArticulo){$this->stockMinimoArticulo = $stockMinimoArticulo;}
        public function setstockMaximoArticulo($stockMaximoArticulo){$this->stockMaximoArticulo = $stockMaximoArticulo;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodArticulo(){return $this->codArticulo;}
        public function getcodMoneda(){return $this->codMoneda;}
        public function getcodUnidad(){return $this->codUnidad;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getdescArticulo(){return $this->descArticulo;}
        public function getglosaArticulo(){return $this->glosaArticulo;}
        public function getglosaUnidadArticulo(){return $this->glosaUnidadArticulo;}
        public function getsaldoCantidadArticulo(){return $this->saldoCantidadArticulo;}
        public function getsaldoCostoArticulo(){return $this->saldoCostoArticulo;}
        public function getstockMinimoArticulo(){return $this->stockMinimoArticulo;}
        public function getstockMaximoArticulo(){return $this->stockMaximoArticulo;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}

    }
?>
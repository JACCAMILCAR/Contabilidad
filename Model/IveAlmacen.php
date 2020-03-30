<?php

    class IveAlmacen
    {
        public $codAlmacen;
        public $descAlmacen;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setdescAlmacen($descAlmacen){$this->descAlmacen = $descAlmacen;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
     
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getdescAlmacen(){return $this->descAlmacen;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}
    
    }
?>
<?php

    class IveUnidad
    {
        public $codUnidad;
        public $descUnidad;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodUnidad($codUnidad){$this->codUnidad = $codUnidad;}
        public function setdescUnidad($descUnidad){$this->descUnidad = $descUnidad;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
     
        public function getcodUnidad(){return $this->codUnidad;}
        public function getdescUnidad(){return $this->descUnidad;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}
    
    }
?>
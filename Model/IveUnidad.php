<?php

    class IveUnidad
    {
        public $codigoUnidad;
        public $descUnidad;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodigoUnidad($codigoUnidad){$this->codigoUnidad = $codigoUnidad;}
        public function setdescUnidad($descUnidad){$this->descUnidad = $descUnidad;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
     
        public function getcodigoUnidad(){return $this->codigoUnidad;}
        public function getdescUnidad(){return $this->descUnidad;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}
    
    }
?>
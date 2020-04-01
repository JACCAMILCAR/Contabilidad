<?php

    class IveGnlConfigMoneda
    {
        public $codMoneda;
        public $codSucursal;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodMoneda($codMoneda){$this->codMoneda = $codMoneda;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodMoneda(){return $this->codMoneda;}
        public function getcodSucursal(){return $this->codSucursal;}                
        public function getenviado(){return $this->enviado;}

    }
?>
<?php

    class IveUsuario
    {
        public $codUsuario;
        public $codSucursal;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodUsuario($codUsuario){$this->codUsuario = $codUsuario;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodUsuario(){return $this->codUsuario;}
        public function getcodSucursal(){return $this->codSucursal;}            
        public function getenviado(){return $this->enviado;}

    }
?>
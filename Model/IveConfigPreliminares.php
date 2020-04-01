<?php

    class IveConfigPreliminares
    {
        public $codPreliminares;
        public $codSucursal;
        public $tipoCodigo;
        public $formaCodigo;
        public $longitudCodigo;
        public $aplicacionCodigo;
        public $mascaraCodigo;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodPreliminares($codPreliminares){$this->codPreliminares = $codPreliminares;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function settipoCodigo($tipoCodigo){$this->tipoCodigo = $tipoCodigo;}
        public function setformaCodigo($formaCodigo){$this->formaCodigo = $formaCodigo;}
        public function setlongitudCodigo($longitudCodigo){$this->longitudCodigo = $longitudCodigo;}
        public function setaplicacionCodigo($aplicacionCodigo){$this->aplicacionCodigo = $aplicacionCodigo;}
        public function setmascaraCodigo($mascaraCodigo){$this->mascaraCodigo = $mascaraCodigo;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodPreliminares(){return $this->codPreliminares;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function gettipoCodigo(){return $this->tipoCodigo;}
        public function getformaCodigo(){return $this->formaCodigo;}
        public function getlongitudCodigo(){return $this->longitudCodigo;}
        public function getaplicacionCodigo(){return $this->aplicacionCodigo;}
        public function getmascaraCodigo(){return $this->mascaraCodigo;}              
        public function getenviado(){return $this->enviado;}

    }
?>
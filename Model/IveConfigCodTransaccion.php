<?php

    class IveConfigCodTransaccion
    {
        public $codTransaccion;
        public $codSucursal;
        public $descCodTransaccion;
        public $tipoCodTransaccion;
        public $conAsientos;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodTransaccion($codTransaccion){$this->codTransaccion = $codTransaccion;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setdescCodTransaccion($descCodTransaccion){$this->descCodTransaccion = $descCodTransaccion;}
        public function settipoCodTransaccion($tipoCodTransaccion){$this->tipoCodTransaccion = $tipoCodTransaccion;}
        public function setconAsientos($conAsientos){$this->conAsientos = $conAsientos;}        
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodTransaccion(){return $this->codTransaccion;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getdescCodTransaccion(){return $this->descCodTransaccion;}
        public function gettipoCodTransaccion(){return $this->tipoCodTransaccion;}
        public function getconAsientos(){return $this->conAsientos;}
        public function getenviado(){return $this->enviado;}

    }
?>
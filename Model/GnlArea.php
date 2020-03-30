<?php

    class GnlArea
    {
        public $codArea;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodArea($codArea){$this->codArea = $codArea;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodArea(){return $this->codArea;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}

    }
?>
<?php

    class Sucursal
    {
        public $codSucursal;
        public $nombreSucursal;
            

        function __construct()
        { }
        //set
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setnombreSucursal($nombreSucursal){$this->nombreSucursal = $nombreSucursal;}
        
        //get
        public function getcodSucursal(){return $this->codSucursal;}
        public function getnombreSucursal(){return $this->nombreSucursal;}
        }
?>
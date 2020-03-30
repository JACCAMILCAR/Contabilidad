<?php

    class IveConsumo
    {
        public $codConsumo;
        public $codSucursal;
        public $codArea;
        public $codAlmacen;
        public $codTransaccion;
        public $descConsumo;
        public $fechaConsumo;
        public $anulado;
        public $estado;
        public $cuentaConsumo;
        public $cuentaSol;
        public $usuarioRegistro;
        public $usuarioConsumo;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodConsumo($codConsumo){$this->codConsumo = $codConsumo;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcodArea($codAreacod){$this->codArea = $codArea;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setcodTransaccion($codTransaccion){$this->codTransaccion = $codTransaccion;}
        public function setdescConsumo($descConsumo){$this->descConsumo = $descConsumo;}
        public function setfechaConsumo($fechaConsumo){$this->fechaConsumo = $fechaConsumo;}
        public function setanulado($anulado){$this->anulado = $anulado;}
        public function setestado($estado){$this->estado = $estado;}
        public function setcuentaConsumo($cuentaConsumo){$this->cuentaConsumo = $cuentaConsumo;}
        public function setcuentaSol($cuentaSol){$this->cuentaSol = $cuentaSol;}
        public function setusuarioRegistro($usuarioRegistro){$this->usuarioRegistro = $usuarioRegistro;}
        public function setusuarioConsumo($usuarioConsumo){$this->usuarioConsumo = $usuarioConsumo;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodConsumo(){return $this->codConsumo;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getcodArea(){return $this->codArea;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getcodTransaccion(){return $this->codTransaccion;}
        public function getdescConsumo(){return $this->descConsumo;}
        public function getfechaConsumo(){return $this->fechaConsumo;}
        public function getanulado(){return $this->anulado;}
        public function getestado(){return $this->estado;}
        public function getcuentaConsumo(){return $this->cuentaConsumo;}
        public function getcuentaSol(){return $this->cuentaSol;}
        public function getusuarioRegistro(){return $this->usuarioRegistro;}
        public function getusuarioConsumo(){return $this->usuarioConsumo;}        
        public function getenviado(){return $this->enviado;}

    }
?>
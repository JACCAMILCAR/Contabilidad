<?php

    class IveTransaccionesSolicitud
    {
        public $codSolicitud;
        public $codSucursal;
        public $codArea;
        public $codAlmacen;
        public $codTransaccion;
        public $cuentaSolicitud;
        public $fechaSolicitud;
        public $descSolicitud;
        public $estado;
        public $anulado;
        public $usuarioRegistro;
        public $usuarioConsumo;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodSolicitud($codSolicitud){$this->codSolicitud = $codSolicitud;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcodArea($codAreacod){$this->codArea = $codArea;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setcodTransaccion($codTransaccion){$this->codTransaccion = $codTransaccion;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setfechaSolicitud($fechaSolicitud){$this->fechaSolicitud = $fechaSolicitud;}
        public function setdescSolicitud($descSolicitud){$this->descSolicitud = $descSolicitud;}
        public function setestado($estado){$this->estado = $estado;}
        public function setanulado($anulado){$this->anulado = $anulado;}
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
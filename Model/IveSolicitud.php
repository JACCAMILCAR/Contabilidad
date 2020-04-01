<?php

    class IveSolicitud
    {
        public $codSolicitud;
        public $codSucursal;
        public $codTransaccionSolicitud;
        public $codArea;
        public $codAlmacen;
        public $codTransaccion;
        public $cuentaSolicitud;
        public $fechaSolicitud;
        public $descSolicitud;
        public $estado;
        public $anulado;
        public $usuarioRegistro;
        public $usuarioSolicitud;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodSolicitud($codSolicitud){$this->codSolicitud = $codSolicitud;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcodTransaccionSolicitud($codTransaccionSolicitud){$this->codTransaccionSolicitud = $codTransaccionSolicitud;}
        public function setcodArea($codArea){$this->codArea = $codArea;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setcodTransaccion($codTransaccion){$this->codTransaccion = $codTransaccion;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setfechaSolicitud($fechaSolicitud){$this->fechaSolicitud = $fechaSolicitud;}
        public function setdescSolicitud($descSolicitud){$this->descSolicitud = $descSolicitud;}
        public function setestado($estado){$this->estado = $estado;}
        public function setanulado($anulado){$this->anulado = $anulado;}
        public function setusuarioRegistro($usuarioRegistro){$this->usuarioRegistro = $usuarioRegistro;}
        public function setusuarioSolicitud($usuarioSolicitud){$this->usuarioSolicitud = $usuarioSolicitud;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodSolicitud(){return $this->codSolicitud;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getcodTransaccionSolicitud(){return $this->codTransaccionSolicitud;}
        public function getcodArea(){return $this->codArea;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getcodTransaccion(){return $this->codTransaccion;}
        public function getcuentaSolicitud(){return $this->cuentaSolicitud;}
        public function getfechaSolicitud(){return $this->fechaSolicitud;}
        public function getdescSolicitud(){return $this->descSolicitud;}
        public function getestado(){return $this->estado;}
        public function getanulado(){return $this->anulado;}
        public function getusuarioRegistro(){return $this->usuarioRegistro;}
        public function getusuarioSolicitud(){return $this->usuarioSolicitud;}        
        public function getenviado(){return $this->enviado;}

    }
?>
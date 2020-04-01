<?php

    class IveTransaccionesSolicitud
    {
        public $codTransaccionSolicitud;
        public $codArticulo;
        public $codAlmacen;
        public $codSucursal;
        public $cuentaSolicitud;
        public $cantidadTransSolicitud;
        public $fechaTransSolicitud;
        public $horaTransSolicitud;
        public $glosaTransSolicitud;
        public $cantidadAprobadaSolicitud;
        public $fechaAprobadaSolicitud;
        public $estado;
        public $anulado;
        public $usuarioRegistro;
        public $usuarioSolicitud;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodTransaccionSolicitud($codTransaccionSolicitud){$this->codTransaccionSolicitud = $codTransaccionSolicitud;}
        public function setcodArticulo($codArticulo){$this->codArticulo = $codArticulo;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setcantidadTransSolicitud($cantidadAprobadaSolicitud){$this->cantidadTransSolicitud = $cantidadTransSolicitud;}
        public function setfechaTransSolicitud($fechaTransSolicitud){$this->fechaTransSolicitud = $fechaTransSolicitud;}
        public function sethoraTransSolicitud($horaTransSolicitud){$this->horaTransSolicitud = $horaTransSolicitud;}
        public function setglosaTransSolicitud($glosaTransSolicitud){$this->glosaTransSolicitud = $glosaTransSolicitud;}
        public function setcantidadAprobadaSolicitud($cantidadAprobadaSolicitud){$this->cantidadAprobadaSolicitud = $cantidadAprobadaSolicitud;}
        public function setfechaAprobadaSolicitud($fechaAprobadaSolicitud){$this->fechaAprobadaSolicitud = $fechaAprobadaSolicitud;}
        public function setestado($estado){$this->estado = $estado;}
        public function setanulado($anulado){$this->anulado = $anulado;}
        public function setusuarioRegistro($usuarioRegistro){$this->usuarioRegistro = $usuarioRegistro;}
        public function setusuarioSolicitud($usuarioSolicitud){$this->usuarioSolicitud = $usuarioSolicitud;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodTransaccionSolicitud(){return $this->codTransaccionSolicitud;}
        public function getcodArticulo(){return $this->codArticulo;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getcuentaSolicitud(){return $this->codSolicitud;}
        public function getcantidadTransSolicitud(){return $this->cantidadTransSolicitud;}
        public function getfechaTransSolicitud(){return $this->fechaTransSolicitud;}
        public function gethoraTransSolicitud(){return $this->horaTransSolicitud;}
        public function getglosaTransSolicitud(){return $this->glosaTransSolicitud;}
        public function getcantidadAprobadaSolicitud(){return $this->cantidadAprobadaSolicitud;}
        public function getfechaAprobadaSolicitud(){return $this->fechaAprobadaSolicitud;}
        public function getestado(){return $this->estado;}
        public function getanulado(){return $this->anulado;}
        public function getusuarioRegistro(){return $this->usuarioRegistro;}
        public function getusuarioSolicitud(){return $this->usuarioSolicitud;}        
        public function getenviado(){return $this->enviado;}

    }
?>
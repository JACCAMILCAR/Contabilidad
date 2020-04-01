<?php

    class IveTransaccionesConsumo
    {
        public $codTransConsumo;
        public $codArticulo;
        public $codSucursal;
        public $cuentaSolicitud;
        public $cantidadAprobadaConsumo;
        public $fechaAprobadaConsumo;
        public $glosaTransConsumo;
        public $cantidadTransConsumo;
        public $estado;
        public $anulado;
        public $usuarioRegistro;
        public $usuarioConsumo;
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodTransConsumo($codTransConsumo){$this->codTransConsumo = $codTransConsumo;}
        public function setcodArticulo($codArticulo){$this->codArticulo = $codArticulo;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setcantidadAprobadaConsumo($cantidadAprobadaConsumo){$this->cantidadAprobadaConsumo = $cantidadAprobadaConsumo;}
        public function setfechaAprobadaConsumo($fechaAprobadaConsumo){$this->fechaAprobadaConsumo = $fechaAprobadaConsumo;}
        public function setglosaTransConsumo($glosaTransConsumo){$this->glosaTransConsumo = $glosaTransConsumo;}
        public function setcantidadTransConsumo($cantidadTransConsumo){$this->cantidadTransConsumo = $cantidadTransConsumo;}
        public function setestado($estado){$this->estado = $estado;}
        public function setanulado($anulado){$this->anulado = $anulado;}
        public function setusuarioRegistro($usuarioRegistro){$this->usuarioRegistro = $usuarioRegistro;}
        public function setusuarioConsumo($usuarioConsumo){$this->usuarioConsumo = $usuarioConsumo;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodTransConsumo(){return $this->codTransConsumo;}
        public function getcodArticulo(){return $this->codArticulo;}
        public function getcodSucursal(){return $this->codSucursal;}        
        public function getcuentaSolicitud(){return $this->codSolicitud;}
        public function getcantidadAprobadaConsumo(){return $this->cantidadAprobadaConsumo;}
        public function getfechaAprobadaConsumo(){return $this->fechaAprobadaConsumo;}
        public function getglosaTransConsumo(){return $this->glosaTransConsumo;}
        public function getcantidadTransConsumo(){return $this->cantidadTransConsumo;}
        public function getanulado(){return $this->anulado;}
        public function getusuarioRegistro(){return $this->usuarioRegistro;}
        public function getusuarioConsumo(){return $this->usuarioConsumo;}        
        public function getenviado(){return $this->enviado;}

    }
?>
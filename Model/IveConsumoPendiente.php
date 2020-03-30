<?php

    class IveConsumoPendiente
    {
        public $codConsumoPendiente;
        public $codArticulo;
        public $codAlmacen;
        public $cantidadAprobada;
        public $fechaAprobada;
        public $cantidadConsumo;
        public $fechaConsumo;
        public $cuentaSolicitud;
        public $cuentaConsumo;
        public $estado;
        public $codSucursal;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodConsumoPendiente($codConsumoPendiente){$this->codConsumoPendiente = $codConsumoPendiente;}
        public function setcodArticulo($codArticulo){$this->codArticulo = $codArticulo;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setcantidadAprobada($cantidadAprobada){$this->cantidadAprobada = $cantidadAprobada;}
        public function setfechaAprobada($fechaAprobada){$this->fechaAprobada = $fechaAprobada;}
        public function setcantidadConsumo($cantidadConsumo){$this->cantidadConsumo = $cantidadConsumo;}
        public function setfechaConsumo($fechaConsumo){$this->fechaConsumo = $fechaConsumo;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setcuentaConsumo($cuentaConsumo){$this->cuentaConsumo = $cuentaConsumo;}
        public function setestado($estado){$this->estado = $estado;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodConsumoPendiente(){return $this->codConsumoPendiente;}
        public function getcodArticulo(){return $this->codArticulo;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getcantidadAprobada(){return $this->cantidadAprobada;}
        public function getfechaAprobada(){return $this->fechaAprobada;}
        public function getcantidadConsumo(){return $this->cantidadConsumo;}
        public function getfechaConsumo(){return $this->fechaConsumo;}
        public function getcuentaSolicitud(){return $this->cuentaSolicitud;}
        public function getcuentaConsumo(){return $this->cuentaConsumo;}
        public function getestado(){return $this->estado;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getenviado(){return $this->enviado;}

    }
?>
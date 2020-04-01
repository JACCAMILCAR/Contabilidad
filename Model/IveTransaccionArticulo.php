<?php

    class IveTransaccionArticulo
    {
        public $codTransArticulo;
        public $codSucursal;
        public $codUnidad;
        public $codMoneda;
        public $codArticulo;
        public $codTransaccion;
        public $cuentaSolicitud;
        public $cuentaConsumo;
        public $fechaTransArticulo;
        public $horaTransArticulo;
        public $glosaTransArticulo;
        public $cantidadTransArticulo;
        public $costoUnidadArticulo;
        public $saldoCantidadArticulo;
        public $saldoCostoArticulo;
        public $tipoCambioMoneda;
        public $usuarioConsumo;
        public $usuarioRegistro;
        public $anulado;              
        public $enviado;

        function __construct()
        { }
        //set
        public function setcodTransArticulo($codTransArticulo){$this->codTransArticulo = $codTransArticulo;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcodUnidad($codUnidad){$this->codUnidad = $codUnidad;}
        public function setcodMoneda($codMoneda){$this->codMoneda = $codMoneda;}
        public function setcodArticulo($codArticulo){$this->codArticulo = $codArticulo;}
        public function setcodTransaccion($codTransaccion){$this->codTransaccion = $codTransaccion;}
        public function setcuentaSolicitud($cuentaSolicitud){$this->cuentaSolicitud = $cuentaSolicitud;}
        public function setcuentaConsumo($cuentaConsumo){$this->cuentaConsumo = $cuentaConsumo;}
        public function setfechaTransArticulo($fechaTransArticulo){$this->fechaTransArticulo = $fechaTransArticulo;}
        public function sethoraTransArticulo($horaTransArticulo){$this->horaTransArticulo = $horaTransArticulo;}
        public function setglosaTransArticulo($glosaTransArticulo){$this->glosaTransArticulo = $glosaTransArticulo;}
        public function setcantidadTransArticulo($cantidadTransArticulo){$this->cantidadTransArticulo = $cantidadTransArticulo;}
        public function setcostoUnidadArticulo($costoUnidadArticulo){$this->costoUnidadArticulo = $costoUnidadArticulo;}
        public function setsaldoCantidadArticulo($saldoCantidadArticulo){$this->saldoCantidadArticulo = $saldoCantidadArticulo;}
        public function setsaldoCostoArticulo($saldoCostoArticulo){$this->saldoCostoArticulo = $saldoCostoArticulo;}
        public function settipoCambioMoneda($tipoCambioMoneda){$this->tipoCambioMoneda = $tipoCambioMoneda;}
        public function setusuarioConsumo($usuarioConsumo){$this->usuarioConsumo = $usuarioConsumo;}        
        public function setusuarioRegistro($usuarioRegistro){$this->usuarioRegistro = $usuarioRegistro;}
        public function setanulado($anulado){$this->anulado = $anulado;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodTransArticulo(){return $this->codTransArticulo;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getcodUnidad(){return $this->codUnidad;}
        public function getcodMoneda(){return $this->codMoneda;}
        public function getcodArticulo(){return $this->codArticulo;}
        public function getcodTransaccion(){return $this->codTransaccion;}
        public function getcuentaSolicitud(){return $this->cuentaSolicitud;}
        public function getcuentaConsumo(){return $this->cuentaConsumo;}
        public function getfechaTransArticulo(){return $this->fechaTransArticulo;}
        public function gethoraTransArticulo(){return $this->horaTransArticulo;}
        public function getglosaTransArticulo(){return $this->glosaTransArticulo;}
        public function getcantidadTransArticulo(){return $this->cantidadTransArticulo;}
        public function getcostoUnidadArticulo(){return $this->costoUnidadArticulo;}
        public function getsaldoCantidadArticulo(){return $this->saldoCantidadArticulo;}
        public function getsaldoCostoArticulo(){return $this->saldoCostoArticulo;}
        public function gettipoCambioMoneda(){return $this->tipoCambioMoneda;}
        public function getusuarioConsumo(){return $this->usuarioConsumo;}
        public function getusuarioRegistro(){return $this->usuarioRegistro;}
        public function getanulado(){return $this->anulado;}                    
        public function getenviado(){return $this->enviado;}

    }
?>
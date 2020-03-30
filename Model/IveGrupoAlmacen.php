<?php

    class IveGrupoAlamacen
    {
        public $codGrupoAlmacen;
        public $codSucursal;
        public $codConsumoPendiente;
        public $codMoneda;
        public $codAlmacen;
        public $descGrupoAlmacen;
        public $cuentaTransArticulo;
        public $cuentaGrupoArticulo;
        public $cuentaConsumoInt;
        public $cuentaDiferenciaArticulo;
        public $enviado;
      

        function __construct()
        { }
        //set
        public function setcodGrupoAlmacen($codGrupoAlmacen){$this->codGrupoAlmacen = $codGrupoAlmacen;}
        public function setcodSucursal($codSucursal){$this->codSucursal = $codSucursal;}
        public function setcodConsumoPendiente($codConsumoPendiente){$this->codConsumoPendiente = $codConsumoPendiente;}
        public function setcodMoneda($codMoneda){$this->codMoneda = $codMoneda;}
        public function setcodAlmacen($codAlmacen){$this->codAlmacen = $codAlmacen;}
        public function setdescGrupoAlmacen($descGrupoAlmacen){$this->descGrupoAlmacen = $descGrupoAlmacen;}
        public function setcuentaTransArticulo($cuentaTransArticulo){$this->cuentaTransArticulo = $cuentaTransArticulo;}
        public function setcuentaGrupoArticulo($cuentaGrupoArticulo){$this->cuentaGrupoArticulo = $cuentaGrupoArticulo;}
        public function setcuentaConsumoInt($cuentaConsumoInt){$this->cuentaConsumoInt = $cuentaConsumoInt;}
        public function setcuentaDiferenciaArticulo($cuentaDiferenciaArticulo){$this->cuentaDiferenciaArticulo = $cuentaDiferenciaArticulo;}
        public function setenviado($enviado){$this->enviado = $enviado;}

        //get
        public function getcodGrupoAlmacen(){return $this->codGrupoAlmacen;}
        public function getcodSucursal(){return $this->codSucursal;}
        public function getcodConsumoPendiente(){return $this->codConsumoPendiente;}
        public function getcodMoneda(){return $this->codMoneda;}
        public function getcodAlmacen(){return $this->codAlmacen;}
        public function getdescGrupoAlmacen(){return $this->descGrupoAlmacen;}
        public function getcuentaTransArticulo(){return $this->cuentaTransArticulo;}
        public function getcuentaGrupoArticulo(){return $this->cuentaGrupoArticulo;}
        public function getcuentaConsumoInt(){return $this->cuentaConsumoInt;}
        public function getcuentaDiferenciaArticulo(){return $this->cuentaDiferenciaArticulo;}        
        public function getenviado(){return $this->enviado;}

    }
?>
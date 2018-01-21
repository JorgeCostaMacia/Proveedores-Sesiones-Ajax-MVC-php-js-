<?php

class Linped {
    private $NUMPEDIDO;
    private $NUMLINEA;
    private $NUMPIEZA;
    private $PRECIOCOMPA;
    private $CANTPEDIDA;
    private $FECHARECEP;
    private $CANTRECIBIDA;

    public function inicializar($numPedido, $numLinea, $numPieza, $precioCompra, $cantPedida, $fechaRecep, $cantRecibida){
        $this->NUMPEDIDO = $numPedido;
        $this->NUMLINEA = $numLinea;
        $this->NUMPIEZA = $numPieza;
        $this->PRECIOCOMPA = $precioCompra;
        $this->CANTPEDIDA = $cantPedida;
        $this->FECHARECEP = $fechaRecep;
        $this->CANTRECIBIDA = $cantRecibida;
    }

    public function getNUMPEDIDO(){return $this->NUMPEDIDO;}
    public function setNUMPEDIDO($NUMPEDIDO){$this->NUMPEDIDO = $NUMPEDIDO;}

    public function getNUMLINEA(){return $this->NUMLINEA;}
    public function setNUMLINEA($NUMLINEA){$this->NUMLINEA = $NUMLINEA;}

    public function getNUMPIEZA(){return $this->NUMPIEZA;}
    public function setNUMPIEZA($NUMPIEZA){$this->NUMPIEZA = $NUMPIEZA;}

    public function getPRECIOCOMPA(){return $this->PRECIOCOMPA;}
    public function setPRECIOCOMPA($PRECIOCOMPA){$this->PRECIOCOMPA = $PRECIOCOMPA;}

    public function getCANTPEDIDA(){return $this->CANTPEDIDA;}
    public function setCANTPEDIDA($CANTPEDIDA){$this->CANTPEDIDA = $CANTPEDIDA;}

    public function getFECHARECEP(){return $this->FECHARECEP;}
    public function setFECHARECEP($FECHARECEP){$this->FECHARECEP = $FECHARECEP;}

    public function getCANTRECIBIDA(){return $this->CANTRECIBIDA;}
    public function setCANTRECIBIDA($CANTRECIBIDA){$this->CANTRECIBIDA = $CANTRECIBIDA;}
}
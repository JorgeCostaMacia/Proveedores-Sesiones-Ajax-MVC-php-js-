<?php

class Pieza {
    private $NUMPIEZA;
    private $NOMPIEZA;
    private $PRECIOVENT;

    public function inicializar($numPieza, $nomPieza, $precioVent){
        $this->NUMPIEZA = $numPieza;
        $this->NOMPIEZA = $nomPieza;
        $this->PRECIOVENT = $precioVent;
    }

    public function getNUMPIEZA(){return $this->NUMPIEZA;}
    public function setNUMPIEZA($NUMPIEZA){$this->NUMPIEZA = $NUMPIEZA;}

    public function getNOMPIEZA(){return $this->NOMPIEZA;}
    public function setNOMPIEZA($NOMPIEZA){$this->NOMPIEZA = $NOMPIEZA;}

    public function getPRECIOVENT(){return $this->PRECIOVENT;}
    public function setPRECIOVENT($PRECIOVENT){$this->PRECIOVENT = $PRECIOVENT;}
}
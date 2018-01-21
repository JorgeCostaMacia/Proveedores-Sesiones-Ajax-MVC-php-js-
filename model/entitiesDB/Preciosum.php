<?php

class Preciosum {
    private $NUMPIEZA;
    private $NUMVEND;
    private $PRECIOUNIT;
    private $DIASSUM;
    private $DESCUENTO;

    public function inicializar($numPieza, $numVend, $precioUnit, $diasSum, $descuento){
        $this->NUMPIEZA = $numPieza;
        $this->NUMVEND = $numVend;
        $this->PRECIOUNIT = $precioUnit;
        $this->DIASSUM = $diasSum;
        $this->DESCUENTO = $descuento;
    }

    public function getNUMPIEZA(){return $this->NUMPIEZA;}
    public function setNUMPIEZA($NUMPIEZA){$this->NUMPIEZA = $NUMPIEZA;}

    public function getNUMVEND(){return $this->NUMVEND;}
    public function setNUMVEND($NUMVEND){$this->NUMVEND = $NUMVEND;}

    public function getPRECIOUNIT(){return $this->PRECIOUNIT;}
    public function setPRECIOUNIT($PRECIOUNIT){$this->PRECIOUNIT = $PRECIOUNIT;}

    public function getDIASSUM(){return $this->DIASSUM;}
    public function setDIASSUM($DIASSUM){$this->DIASSUM = $DIASSUM;}

    public function getDESCUENTO(){return $this->DESCUENTO;}
    public function setDESCUENTO($DESCUENTO){$this->DESCUENTO = $DESCUENTO;}
}
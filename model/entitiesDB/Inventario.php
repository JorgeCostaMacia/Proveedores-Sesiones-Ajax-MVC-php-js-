<?php

class Inventario {
    private $NUMPIEZA;
    private $NUMBIN;
    private $CANTDISPONIBLE;
    private $FECHARECUENTO;
    private $PERIODORECUENTO;
    private $CANTAJUST;
    private $CARTREORD;
    private $PUNTOREORD;

    public function inicializar($numpieza, $numbin, $cantdisponible, $fecharecuento, $periodorecuento, $cantajuste, $cartreord, $puntoreord) {
        $this->NUMPIEZA = $numpieza;
        $this->NUMBIN = $numbin;
        $this->CANTDISPONIBLE = $cantdisponible;
        $this->FECHARECUENTO = $fecharecuento;
        $this->PERIODORECUENTO = $periodorecuento;
        $this->CANTAJUST = $cantajuste;
        $this->CARTREORD = $cartreord;
        $this->PUNTOREORD = $puntoreord;
    }

    public function getNUMPIEZA(){return $this->NUMPIEZA;}
    public function setNUMPIEZA($NUMPIEZA){$this->NUMPIEZA = $NUMPIEZA;}

    public function getNUMBIN(){return $this->NUMBIN;}
    public function setNUMBIN($NUMBIN){$this->NUMBIN = $NUMBIN;}

    public function getCANTDISPONIBLE(){return $this->CANTDISPONIBLE;}
    public function setCANTDISPONIBLE($CANTDISPONIBLE){$this->CANTDISPONIBLE = $CANTDISPONIBLE;}

    public function getFECHARECUENTO(){return $this->FECHARECUENTO;}
    public function setFECHARECUENTO($FECHARECUENTO){$this->FECHARECUENTO = $FECHARECUENTO;}

    public function getPERIODORECUENTO(){return $this->PERIODORECUENTO;}
    public function setPERIODORECUENTO($PERIODORECUENTO){$this->PERIODORECUENTO = $PERIODORECUENTO;}

    public function getCANTAJUST(){return $this->CANTAJUST;}
    public function setCANTAJUST($CANTAJUST){$this->CANTAJUST = $CANTAJUST;}

    public function getCARTREORD(){return $this->CARTREORD;}
    public function setCARTREORD($CARTREORD){$this->CARTREORD = $CARTREORD;}

    public function getPUNTOREORD(){return $this->PUNTOREORD;}
    public function setPUNTOREORD($PUNTOREORD){$this->PUNTOREORD = $PUNTOREORD;}
}
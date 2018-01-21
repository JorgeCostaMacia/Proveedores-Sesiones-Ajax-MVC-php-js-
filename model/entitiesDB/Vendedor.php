<?php

class Vendedor {
    private $NUMVEND;
    private $NOMVEND;
    private $NOMBRECOMER;
    private $TELEFONO;
    private $CALLE;
    private $CIUDAD;
    private $PROVINCIA;
    private $COD_POSTAL;

    public function inicializar($numVend, $nomVend, $nombreComer, $telefono, $calle, $ciudad, $provincida, $codigo_postal) {
        $this->NUMVEND = $numVend;
        $this->NOMVEND = $nomVend;
        $this->NOMBRECOMER = $nombreComer;
        $this->TELEFONO = $telefono;
        $this->CALLE = $calle;
        $this->CIUDAD = $ciudad;
        $this->PROVINCIA = $provincida;
        $this->COD_POSTAL = $codigo_postal;
    }

    public function getNUMVEND(){return $this->NUMVEND;}
    public function setNUMVEND($NUMVEND){$this->NUMVEND = $NUMVEND;}

    public function getNOMVEND(){return $this->NOMVEND;}
    public function setNOMVEND($NOMVEND){$this->NOMVEND = $NOMVEND;}

    public function getNOMBRECOMER(){return $this->NOMBRECOMER;}
    public function setNOMBRECOMER($NOMBRECOMER){$this->NOMBRECOMER = $NOMBRECOMER;}

    public function getTELEFONO(){return $this->TELEFONO;}
    public function setTELEFONO($TELEFONO){$this->TELEFONO = $TELEFONO;}

    public function getCALLE(){return $this->CALLE;}
    public function setCALLE($CALLE){$this->CALLE = $CALLE;}

    public function getCIUDAD(){return $this->CIUDAD;}
    public function setCIUDAD($CIUDAD){$this->CIUDAD = $CIUDAD;}

    public function getPROVINCIA(){return $this->PROVINCIA;}
    public function setPROVINCIA($PROVINCIA){$this->PROVINCIA = $PROVINCIA;}

    public function getCODPOSTAL(){return $this->COD_POSTAL;}
    public function setCODPOSTAL($COD_POSTAL){$this->COD_POSTAL = $COD_POSTAL;}
}
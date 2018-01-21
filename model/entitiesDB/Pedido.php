<?php

class Pedido {
    private $NUMPEDIDO;
    private $NUMVEND;
    private $FECHA;

    public function inicializar($numPedido, $numVend, $fecha) {
        $this->NUMPEDIDO = $numPedido;
        $this->NUMVEND = $numVend;
        $this->FECHA = $fecha;
    }

    public function getNUMPEDIDO(){return $this->NUMPEDIDO;}
    public function setNUMPEDIDO($NUMPEDIDO){$this->NUMPEDIDO = $NUMPEDIDO;}

    public function getNUMVEND(){return $this->NUMVEND;}
    public function setNUMVEND($NUMVEND){$this->NUMVEND = $NUMVEND;}

    public function getFECHA(){return $this->FECHA;}
    public function setFECHA($FECHA){$this->FECHA = $FECHA;}
}
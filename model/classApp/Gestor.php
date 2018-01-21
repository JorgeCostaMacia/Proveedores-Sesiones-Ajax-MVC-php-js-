<?php

class Gestor extends LoginAjax{
    private $nick;
    private $errores;
    private $inventarios;
    private $linpeds;
    private $logins;
    private $pedidos;
    private $piezas;
    private $preciosums;
    private $vendedores;
    private $varios;

    public function __construct($nick = ""){
        $this->nick = $nick;
        $this->errores = [];
        $this->inventarios = [];
        $this->linpeds = [];
        $this->logins = [];
        $this->pedidos = [];
        $this->piezas = [];
        $this->preciosums = [];
        $this->vendedores = [];
        $this->varios = [];
    }

    public function getNick(){return $this->nick;}
    public function setNick($nick){$this->nick = $nick;}

    public function getErrores(){return $this->errores;}
    public function setErrores($errores){$this->errores = $errores;}
    public function addErrores($errores){$this->errores[] = $errores;}

    public function getInventarios(){return $this->inventarios;}
    public function setInventarios($inventarios){$this->inventarios = $inventarios;}
    public function addInventarios($inventarios){$this->inventarios[] = $inventarios;}
    public function delInventarios($numBin){
        foreach($this->inventarios as $key => $inventario){
            if($inventario->getNumBin() == $numBin){
                unset($this->inventarios[$key]);
            }
        }
    }

    public function getLinpeds(){return $this->linpeds;}
    public function setLinpeds($linpeds){$this->linpeds = $linpeds;}
    public function addLinpeds($linpeds){$this->linpeds[] = $linpeds;}
    public function dellLinpeds($numPedido, $numLinea){
        foreach($this->linpeds as $key => $linPed){
            if($linPed->getNumLinea() == $numLinea && $linPed->getNumPedido() == $numPedido){
                unset($this->linpeds[$key]);
            }
        }
    }

    public function getLogins(){return $this->logins;}
    public function setLogins($logins){$this->logins = $logins;}
    public function addLogins($logins){$this->logins[] = $logins;}
    public function dellLogins($nick){
        foreach($this->logins as $key => $login){
            if($login->getNick() == $nick){
                unset($this->logins[$key]);
            }
        }
    }

    public function getPedidos(){return $this->pedidos;}
    public function setPedidos($pedidos){$this->pedidos = $pedidos;}
    public function addPedidos($pedidos){$this->pedidos[] = $pedidos;}
    public function dellPedidos($numPedido){
        foreach($this->pedidos as $key => $pedido){
            if($pedido->getNumPedido() == $numPedido){
                unset($this->pedidos[$key]);
            }
        }
    }

    public function getPiezas(){return $this->piezas;}
    public function setPiezas($piezas){$this->piezas = $piezas;}
    public function addPiezas($piezas){$this->piezas[] = $piezas;}
    public function dellPiezas($numPieza){
        foreach($this->piezas as $key => $pieza){
            if($pieza->getNumPieza() == $numPieza){
                unset($this->piezas[$key]);
            }
        }
    }

    public function getPreciosums(){return $this->preciosums;}
    public function setPreciosums($preciosums){$this->preciosums = $preciosums;}
    public function addPreciosums($preciosums){$this->preciosums[] = $preciosums;}
    public function dellPreciosums($numPieza, $numVend){
        foreach($this->preciosums as $key => $preciosum){
            if($preciosum->getNumPieza() == $numPieza && $preciosum->getNumVend() == $numVend){
                unset($this->preciosums[$key]);
            }
        }
    }

    public function getVendedores(){return $this->vendedores;}
    public function setVendedores($vendedores){$this->vendedores = $vendedores;}
    public function addVendedores($vendedores){$this->vendedores[] = $vendedores;}
    public function dellVendedores($nick){
        foreach($this->vendedores as $key => $vendedor){
            if($vendedor->getNick() == $nick){
                unset($this->vendedores[$key]);
            }
        }
    }

    public function getVarios() { return $this->varios; }
    public function setVarios($varios){$this->varios = $varios;}
    public function addVarios($varios){$this->varios[] = $varios;}
}
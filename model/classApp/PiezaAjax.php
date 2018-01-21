<?php

abstract class PiezaAjax extends PrecioSumAjax{
    public function getPkPieza($_connection){
        $_ressult = $_connection->_select('MAX(numpieza)', 'PIEZA');
        if (isset($_ressult["ressult"])) { $this->setVarios($_connection->format_select_Assoc($_ressult["ressult"])); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function existPieza($_connection){
        $numpieza = trim($_POST["numpieza"]);

        $_ressult = $_connection->_select('*', 'PIEZA', 'WHERE numpieza="' . $numpieza . '"');
        if (isset($_ressult["ressult"])) { $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], 'Pieza')); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la comprobacion de exist pieza"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function addPieza($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $nompieza = trim(strtoupper($_POST["nompieza"]));
        $preciovent = trim($_POST["preciovent"]);

        $_ressult = $_connection->_insert('PIEZA', '("' . $numpieza . '","' . $nompieza . '",' . $preciovent . ')');

        if (isset($_ressult["ressult"])) { $this->setVarios($_ressult["ressult"]); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante el registro de pieza"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function searchPieza($_connection){
        $itemSearch = trim($_POST["itemSearch"]);
        $typeSearch = trim($_POST["typeSearch"]);
        $campSearch = trim($_POST["campSearch"]);

        $whereParameter = ' LIKE ';

        if($typeSearch == "contiene"){ $whereParameter .= '"%' . $itemSearch . '%"'; }
        else if($typeSearch == "empieza"){ $whereParameter .= '"' . $itemSearch . '%"'; }
        else if($typeSearch == "termina"){ $whereParameter .= '"%' . $itemSearch . '"'; }

        $_ressult = $_connection->_select('*', 'PIEZA', 'WHERE ' . $campSearch . $whereParameter);
        if (isset($_ressult["ressult"])) { $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], 'Pieza')); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la busqueda de piezas"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function updatePieza($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $nompieza = trim(strtoupper($_POST["nompieza"]));
        $preciovent = trim($_POST["preciovent"]);

        $_ressult = $_connection->_update('PIEZA',  'numpieza="' . $numpieza . '",nompieza="' . $nompieza . '",preciovent=' . $preciovent, 'WHERE numpieza="' . $numpieza . '"');
        if (isset($_ressult["ressult"])) { $this->addVarios($_ressult["ressult"]); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la la modificacion de pieza"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function getDisabledPiezaDel($_connection){
        $_ressult = $_connection->_select('*', 'PIEZA', "WHERE numpieza IN(SELECT numpieza FROM LINPED) OR numpieza IN(SELECT numpieza FROM PRECIOSUM)");
        if (isset($_ressult["ressult"])) { $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], "Pieza")); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function getDisabledPiezaUpd($_connection){
        $_ressult = $_connection->_select('*', 'PIEZA', "WHERE numpieza IN(SELECT numpieza FROM INVENTARIO)");
        if (isset($_ressult["ressult"])) { $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], "Pieza")); }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function delPieza($_connection){
        $numpieza = trim($_POST["numpieza"]);

        $_ressult = $_connection->_delete('PIEZA', 'numpieza="' . $numpieza. '"');
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_ressult["ressult"]);
            $this->addVarios($numpieza);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la eliminacion de pieza"));
            $this->addErrores($_ressult["error"]);
        }
    }
}
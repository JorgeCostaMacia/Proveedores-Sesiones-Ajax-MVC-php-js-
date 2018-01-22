<?php

abstract class PrecioSumAjax extends VendedorAjax{
    public function getPkPreciosum($_connection){
        $_ressult = $_connection->_select('numpieza', 'PIEZA');
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_connection->format_select_Assoc($_ressult["ressult"]));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }

        $_ressult = $_connection->_select('numvend', 'VENDEDOR');
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_connection->format_select_Assoc($_ressult["ressult"]));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function existPreciosum($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $numvend = trim($_POST["numvend"]);

        $_ressult = $_connection->_select('*', 'PRECIOSUM', 'INNER JOIN VENDEDOR ON PRECIOSUM.NUMVEND = VENDEDOR.NUMVEND WHERE numpieza="' . $numpieza . '" AND numvend=' . $numvend);
        if (isset($_ressult["ressult"])) {
            $this->setPreciosums($_connection->format_select_Object($_ressult["ressult"], 'PreciosumVendedor'));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la comprobacion de exist preciosum"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function addPreciosum($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $numvend = trim($_POST["numvend"]);
        $preciounit = trim($_POST["preciounit"]);
        $diassum = trim($_POST["diassum"]);
        $descuento = trim($_POST["descuento"]);

        if(esNumero($numvend) && esNumero($preciounit) && esNumero($diassum) && esNumero($descuento)){
            $_ressult = $_connection->_insert('PRECIOSUM', '("' . $numpieza . '",' . $numvend . ',' . $preciounit . ',' . $diassum . ',' . $descuento .')');

            if (isset($_ressult["ressult"])) {
                $this->addVarios($_ressult["ressult"]);
            }
            else if (isset($_ressult["error"])) {
                $this->addErrores(new Error("Se ha producido un error durante el registro de preciosum"));
                $this->addErrores($_ressult["error"]);
            }
        }
        else { $this->addErrores(new Error('Formato incorrecto de los campos de preciosum')); }
    }

    public function searchPreciosum($_connection){
        $itemSearch = trim($_POST["itemSearch"]);
        $typeSearch = trim($_POST["typeSearch"]);
        $campSearch = trim($_POST["campSearch"]);

        $whereParameter = ' LIKE ';

        if($typeSearch == "contiene"){ $whereParameter .= '"%' . $itemSearch . '%"'; }
        else if($typeSearch == "empieza"){ $whereParameter .= '"' . $itemSearch . '%"'; }
        else if($typeSearch == "termina"){ $whereParameter .= '"%' . $itemSearch . '"'; }

        $_ressult = $_connection->_select('*', 'PRECIOSUM', 'INNER JOIN VENDEDOR ON PRECIOSUM.NUMVEND = VENDEDOR.NUMVEND WHERE ' . $campSearch . $whereParameter);
        if (isset($_ressult["ressult"])) {
            $this->setPreciosums($_connection->format_select_Object($_ressult["ressult"], 'PreciosumVendedor'));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la busqueda de preciosum"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function delPreciosum($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $numvend = trim($_POST["numvend"]);

        $_ressult = $_connection->_delete('PRECIOSUM', 'numpieza="' . $numpieza . '" AND numvend=' . $numvend);
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_ressult["ressult"]);
            $this->addVarios($numpieza);
            $this->addVarios($numvend);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la eliminacion de preciosum"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function updatePreciosum($_connection){
        $numpieza = trim(strtoupper($_POST["numpieza"]));
        $numvend = trim($_POST["numvend"]);
        $preciounit = trim($_POST["preciounit"]);
        $diassum = trim($_POST["diassum"]);
        $descuento = trim($_POST["descuento"]);

        $_ressult = $_connection->_update('PRECIOSUM', 'preciounit=' . $preciounit . ',diassum=' . $diassum . ',descuento=' . $descuento, 'WHERE numpieza="' . $numpieza . '" AND numvend=' . $numvend);
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_ressult["ressult"]);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la la modificacion de preciosum"));
            $this->addErrores($_ressult["error"]);
        }
    }
}
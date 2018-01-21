<?php

abstract class VendedorAjax extends Json{
    public function getPkVendedor($_connection){
        $_ressult = $_connection->_select('MAX(numvend)', 'VENDEDOR');
        if (isset($_ressult["ressult"])) {
            $this->setVarios($_connection->format_select_Assoc($_ressult["ressult"]));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function addVendedor($_connection){
        $numvend = 1 * trim($_POST["numvend"]);
        $nomvend = trim(strtoupper($_POST["nomvend"]));
        $nombrecomer = trim(strtoupper($_POST["nombrecomer"]));
        $telefono = trim($_POST["telefono"]);
        $calle = trim(strtoupper($_POST["calle"]));
        $ciudad = trim(strtoupper($_POST["ciudad"]));
        $provincia = trim(strtoupper($_POST["provincia"]));
        $cod_postal = trim($_POST["cod_postal"]);

        $_ressult = $_connection->_insert('VENDEDOR', '(' . $numvend . ',"' . $nomvend . '","' . $nombrecomer . '",'  . $telefono . ',"' . $calle . '","' . $ciudad . '","' . $provincia . '","' . $cod_postal . '")');

        if (isset($_ressult["ressult"])) {
            $this->setVarios($_ressult["ressult"]);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante el registro de vendedor"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function searchVendedor($_connection){
        $itemSearch = trim($_POST["itemSearch"]);
        $typeSearch = trim($_POST["typeSearch"]);
        $campSearch = trim($_POST["campSearch"]);

        $whereParameter = ' LIKE ';

        if($typeSearch == "contiene"){ $whereParameter .= '"%' . $itemSearch . '%"'; }
        else if($typeSearch == "empieza"){ $whereParameter .= '"' . $itemSearch . '%"'; }
        else if($typeSearch == "termina"){ $whereParameter .= '"%' . $itemSearch . '"'; }

        $_ressult = $_connection->_select('*', 'VENDEDOR', 'WHERE ' . $campSearch . $whereParameter);
        if (isset($_ressult["ressult"])) {
            $this->setVendedores($_connection->format_select_Object($_ressult["ressult"], 'Vendedor'));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la busqueda de vendedor"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function updateVendedor($_connection){
        $numvend = 1 * trim($_POST["numvend"]);
        $nomvend = trim(strtoupper($_POST["nomvend"]));
        $nombrecomer = trim(strtoupper($_POST["nombrecomer"]));
        $telefono = trim($_POST["telefono"]);
        $calle = trim(strtoupper($_POST["calle"]));
        $ciudad = trim(strtoupper($_POST["ciudad"]));
        $provincia = trim(strtoupper($_POST["provincia"]));
        $cod_postal = trim($_POST["cod_postal"]);

        $_ressult = $_connection->_update('VENDEDOR',  'numvend=' . $numvend . ',nomvend="' . $nomvend . '",nombrecomer="' . $nombrecomer . '",telefono="' . $telefono . '",calle="' . $calle . '",ciudad="' . $ciudad . '",provincia="' . $provincia . '",COD_POSTAL=' . $cod_postal, 'WHERE numvend=' . $numvend);
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_ressult["ressult"]);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la la modificacion de vendedor"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function getDisabledVendedor($_connection){
        $_ressult = $_connection->_select('*', 'VENDEDOR', "WHERE numvend IN(SELECT numvend FROM PEDIDO) OR numvend IN(SELECT numvend FROM PRECIOSUM)");
        if (isset($_ressult["ressult"])) {
            $this->setVendedores($_connection->format_select_Object($_ressult["ressult"], "Vendedor"));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la inicializacion"));
            $this->addErrores($_ressult["error"]);
        }
    }

    public function delVendedor($_connection){
        $numvend = trim($_POST["numvend"]);

        $_ressult = $_connection->_delete('VENDEDOR', 'numvend=' . $numvend);
        if (isset($_ressult["ressult"])) {
            $this->addVarios($_ressult["ressult"]);
            $this->addVarios($numvend);
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores(new Error("Se ha producido un error durante la eliminacion de vendedor"));
            $this->addErrores($_ressult["error"]);
        }
    }
}

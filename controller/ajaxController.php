<?php

include_once 'includes/autoloader.php';

if(isset($_POST["action"])){
    $gestor = new Gestor();
    $connection = new DBusser();

    if($connection->_connection instanceof DBError){
        $gestor->addErrores($connection->_connection);
    }
    else {
        $action = $_POST["action"];

        if($action == "login") { $gestor->getUsuarioLogin($connection); }
        else if($action == "getAcount") { $gestor->addLogin($connection); }

        else if($action == "getPkPreciosum"){ $gestor->getPkPreciosum($connection); }
        else if($action == "searchPreciosum"){ $gestor->searchPreciosum($connection); }
        else if($action == "existPreciosum"){ $gestor->existPreciosum($connection); }
        else if($action == "addPreciosum"){ $gestor->addPreciosum($connection); }
        else if($action == "delPreciosum"){ $gestor->delPreciosum($connection); }
        else if($action == "updatePreciosum"){ $gestor->updatePreciosum($connection); }

        else if($action == "getPkVendedor"){ $gestor->getPkVendedor($connection); }
        else if($action == "searchVendedor"){ $gestor->searchVendedor($connection); }
        else if($action == "addVendedor"){ $gestor->addVendedor($connection); }
        else if($action == "getDisabledVendedor"){ $gestor->getDisabledVendedor($connection); }
        else if($action == "delVendedor"){ $gestor->delVendedor($connection); }
        else if($action == "updateVendedor"){ $gestor->updateVendedor($connection); }

        else if($action == "getPkPieza"){ $gestor->getPkPieza($connection); }
        else if($action == "existPieza"){ $gestor->existPieza($connection); }
        else if($action == "searchPieza"){ $gestor->searchPieza($connection); }
        else if($action == "addPieza"){ $gestor->addPieza($connection); }
        else if($action == "getDisabledPiezaDel"){ $gestor->getDisabledPiezaDel($connection); }
        else if($action == "getDisabledPiezaUpd"){ $gestor->getDisabledPiezaUpd($connection); }
        else if($action == "delPieza"){ $gestor->delPieza($connection); }
        else if($action == "updatePieza"){ $gestor->updatePieza($connection); }
    }

    header('Content-Type',  'application/json');
    echo $gestor->getGestorJson();
}
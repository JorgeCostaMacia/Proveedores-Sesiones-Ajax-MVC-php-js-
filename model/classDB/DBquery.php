<?php

abstract class DBquery extends DBconnection {

    public function _createDB($_name){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('CREATE DATABASE ' . $_name . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Crear base de datos', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _dropDB($_dropDatabase){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('DROP DATABASE '. $_dropDatabase . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Borrar base de datos', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _createTable($_name, $_values = ""){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('CREATE TABLE ' . $_name . ' ' . $_values . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Crear tabla', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _dropTable($_dropTable){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('DROP TABLE '. $_dropTable . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Borrar tabla', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _truncateTable($_truncateTable){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('TRUNCATE TABLE '. $_truncateTable . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Truncar tabla', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _setFK($_setFOREIGN_KEY_CHECKS = "1"){
        $_ressult = [];
        try {
            $ressult = $this->_connection->prepare('SET FOREIGN_KEY_CHECKS= '. $_setFOREIGN_KEY_CHECKS . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Cambiar FK', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _setAutocommit($autocommit = "true"){
        $_ressult = [];
        try {
            $this->_connection->autocommit($autocommit);
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Cambiar autocommit', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _setSAFE_UPDATES($SQL_SAFE_UPDATES = "1"){
        $_ressult = [];
        try {
            $ressult = $this->_connection->prepare('SET SQL_SAFE_UPDATES= '. $SQL_SAFE_UPDATES . ";");
            $_ressult['ressult'] = $ressult->execute();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Cambiar FK', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _select($_select, $_from, $more = ""){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('SELECT '. $_select . ' FROM ' . $_from . " " . $more . ";");
            $ressult->execute();
            $_ressult['ressult'] = $ressult;
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Select', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function format_select_Object($_ressult, $className){
        $_ressult->setFetchMode(PDO::FETCH_CLASS, $className);
        return $_ressult->fetchAll();
    }

    public function format_select_Assoc($_ressult){
        return $_ressult->fetchAll(PDO::FETCH_ASSOC);
    }

    public function _insert($_insertInto, $_values) {
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('INSERT INTO ' . $_insertInto . ' VALUES ' . $_values . ';');
            $ressult->execute();
            $_ressult['ressult'] = $ressult->rowCount();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Insert', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _insertSelect($_insertInto, $_select, $_from, $more = "") {
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('INSERT INTO ' . $_insertInto . ' SELECT ' . $_select . ' FROM ' . $_from . ' ' .$more . ';');
            $ressult->execute();
            $_ressult['ressult'] = $ressult->rowCount();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Insert', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _update($_update, $_set, $more = ""){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('UPDATE ' . $_update . ' SET ' . $_set . " " . $more . ';');
            $ressult->execute();
            $_ressult['ressult'] = $ressult->rowCount();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Update', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _delete($_deleteFrom, $_where){
        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare('DELETE FROM ' . $_deleteFrom . ' WHERE ' . $_where . ';');
            $ressult->execute();
            $_ressult['ressult'] = $ressult->rowCount();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Delete', $_exception->getCode(), $_exception->getMessage());
        }

        return $_ressult;
    }

    public function _existInTable($tabla, $datos){
        $sql = "SELECT * FROM $tabla WHERE 1=1 ";
        foreach($datos as $value){
                $sql .= 'AND' . $value["column"] . ' =  ' . $value["clave"];
        }

        $_ressult = [];

        try {
            $ressult = $this->_connection->prepare($sql . ';');
            $ressult->execute();
            $_ressult['ressult'] = $ressult->rowCount();
        }
        catch (PDOException $_exception) {
            $_ressult["error"] = new DBerror('No se ha podido realizar la accion: Existe en tablas', $_exception->getCode(), $_exception->getMessage());
        }

        if($_ressult['ressult'] > 0){ return true; }
        else { return false; }
    }

    public function _transaction($_querys){
        $_ressultControl = true;
        $_ressults = [];

        $this->_connection->beginTransaction();

        foreach($_querys as $key=>$_query){
            $_ressults[$key] = [];
            $_ressults[$key]["query"] = $_query;

            try {
                $_ressults[$key]['ressult'] = $this->_connection->prepare($_query);
                $_ressults[$key]['ressult']->execute();
                $_ressults[$key]['rowCount'] = $_ressults[$key]['ressult']->rowCount();
                $_ressults[$key]["error"] = "";
            }
            catch (PDOException $_exception) {
                $_ressults[$key]["error"] = new DBerror('No se ha podido realizar la accion: Transaccion', $_exception->getCode(), $_exception->getMessage());
                $_ressultControl = false;
            }
        }

        if($_ressultControl == false){ $this->_connection->rollback(); }
        else { $this->_connection->commit(); }

        return $_ressults;
    }
}
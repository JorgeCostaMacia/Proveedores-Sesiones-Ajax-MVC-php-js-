<?php

define("_DBTYPE", "mysql");
define("_HOST", "localhost");
define("_DB", "proveedores2");
define("_USSER", "root");
define("_PASS", "root");

abstract class DBconnection{

    private static $_instance;

    protected function getConnection() {
        if(!self::$_instance) {
            try {
                self::$_instance =  new PDO(_DBTYPE . ':host=' . _HOST . ';dbname=' . _DB, _USSER, _PASS);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $_exception) {
                return new DBerror('Se ha producido un error en la conexion', $_exception->getCode(), $_exception->getMessage());
            }
        }
        return self::$_instance;
    }

    public function disconnect(){ self::$_instance = null; }
}
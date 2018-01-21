<?php

class DBusser extends DBquery{
    public $_connection;

    function __construct() { $this->_connection = DBconnection::getConnection(); }
}
<?php

class DBerror {

    public $ERRMESSAGE;
    public $ERRCODEEXCEPTION;
    public $ERRMESSAGEEXCEPTION;

    public function __construct($errMessage, $errCode = "", $errMessExc = "") {
        $this->ERRMESSAGE = $errMessage;
        $this->ERRCODEEXCEPTION = $errCode;
        $this->ERRMESSAGEEXCEPTION = $errMessExc;
    }

    public function getERRMESSAGE() { return $this->ERRMESSAGE; }
    public function setERRMESSAGE($ERRMESSAGE) { $this->ERRMESSAGE = $ERRMESSAGE; }

    public function getERRCODEEXCEPTION() { return $this->ERRCODEEXCEPTION; }
    public function setERRCODEEXCEPTION($ERRCODEEXCEPTION) { $this->ERRCODEEXCEPTION = $ERRCODEEXCEPTION; }

    public function getERRMESSAGEEXCEPTION() { return $this->ERRMESSAGEEXCEPTION; }
    public function setERRMESSAGEEXCEPTION($ERRMESSAGEEXCEPTION) { $this->ERRMESSAGEEXCEPTION = $ERRMESSAGEEXCEPTION; }
}
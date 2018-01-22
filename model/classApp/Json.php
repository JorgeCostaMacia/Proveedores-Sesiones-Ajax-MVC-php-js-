<?php

abstract class Json {
    public function getGestorJson(){
        $_returned = [];
        $_returned["errores"] = [];
        $_returned["inventarios"] = [];
        $_returned["linpeds"] = [];
        $_returned["logins"] = [];
        $_returned["pedidos"] = [];
        $_returned["piezas"] = [];
        $_returned["preciosums"] = [];
        $_returned["vendedores"] = [];
        $_returned["varios"] = $this->getVarios();

       foreach($this->getErrores() as $error){
            $err = [];
            $err["ERRMESSAGE"] = $error->getERRMESSAGE();
            $err["ERRCODEEXCEPTION"] = $error->getERRCODEEXCEPTION();
            $err["ERRMESSAGEEXCEPTION"] = $error->getERRMESSAGEEXCEPTION();
            $_returned["errores"][] = $err;
        }

        foreach($this->getInventarios() as $inventario){
            $inv = [];
            $inv["NUMPIEZA"] = $inventario->getNUMPIEZA();
            $inv["NUMBIN"] = $inventario->getNUMBIN();
            $inv["CANTDISPONIBLE"] = $inventario->getCANTDISPONIBLE();
            $inv["FECHARECUENTO"] = $inventario->getFECHARECUENTO();
            $inv["PERIODORECUENTO"] = $inventario->getPERIODORECUENTO();
            $inv["CANTAJUST"] = $inventario->getCANTAJUST();
            $inv["CARTREORD"] = $inventario->getCARTREORD();
            $inv["PUNTOREORD"] = $inventario->getPUNTOREORD();
            $_returned["inventarios"][] = $inv;
        }

        foreach($this->getLinpeds() as $linped){
            $lin = [];
            $lin["NUMPEDIDO"] = $linped->getNUMPEDIDO();
            $lin["NUMLINEA"] = $linped->getNUMLINEA();
            $lin["NUMPIEZA"] = $linped->getNUMPIEZA();
            $lin["PRECIOCOMPA"] = $linped->getPRECIOCOMPA();
            $lin["CANTPEDIDA"] = $linped->getCANTPEDIDA();
            $lin["FECHARECEP"] = $linped->getFECHARECEP();
            $lin["CANTRECIBIDA"] = $linped->getCANTRECIBIDA();
            $_returned["linpeds"][] = $lin;
        }

        foreach($this->getLogins() as $login){
            $log = [];
            $log["NUMVEND"] = $login->getNUMVEND();
            $log["NICK"] = $login->getNICK();
            $log["PASS"] = $login->getPASS();
            $_returned["logins"][] = $log;
        }

        foreach($this->getPedidos() as $pedido){
            $ped = [];
            $ped["NUMPEDIDO"] = $pedido->getNUMPEDIDO();
            $ped["NUMVEND"] = $pedido->getNUMVEND();
            $ped["FECHA"] = $pedido->getFECHA();
            $_returned["pedidos"][] = $ped;
        }

        foreach($this->getPiezas() as $pieza){
            $piez = [];
            $piez["NUMPIEZA"] = $pieza->getNUMPIEZA();
            $piez["NOMPIEZA"] = $pieza->getNOMPIEZA();
            $piez["PRECIOVENT"] = $pieza->getPRECIOVENT();
            $_returned["piezas"][] = $piez;
        }

        foreach($this->getPreciosums() as $preciosum){
            $precio = [];
            $precio["NUMPIEZA"] = $preciosum->getNUMPIEZA();
            $precio["NUMVEND"] = $preciosum->getNUMVEND();
            $precio["PRECIOUNIT"] = $preciosum->getPRECIOUNIT();
            $precio["DIASSUM"] = $preciosum->getDIASSUM();
            $precio["DESCUENTO"] = $preciosum->getDESCUENTO();
            $precio["NOMVEND"] = $preciosum->getNOMVEND();
            $precio["PROVINCIA"] = $preciosum->getPROVINCIA();
            $_returned["preciosums"][] = $precio;
        }

        foreach($this->getVendedores() as $vendedor){
            $vend = [];
            $vend["NUMVEND"] = $vendedor->getNUMVEND();
            $vend["NOMVEND"] = $vendedor->getNOMVEND();
            $vend["NOMBRECOMER"] = $vendedor->getNOMBRECOMER();
            $vend["TELEFONO"] = $vendedor->getTELEFONO();
            $vend["CALLE"] = $vendedor->getCALLE();
            $vend["CIUDAD"] = $vendedor->getCIUDAD();
            $vend["PROVINCIA"] = $vendedor->getPROVINCIA();
            $vend["COD_POSTAL"] = $vendedor->getCODPOSTAL();
            $_returned["vendedores"][] = $vend;
        }

        return json_encode($_returned);
    }
}

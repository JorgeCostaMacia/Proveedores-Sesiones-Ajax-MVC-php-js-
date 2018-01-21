"use strict";

function inicFormVendedor(){
    let parametros = "action=getPkVendedor";
    ajaxQuery('controller/ajaxController.php', parametros ,'addValuesVendedor', 'POST', 0);
}

function addValuesVendedor(resultado){
    let ressult = JSON.parse(resultado);

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addPkVendedor(1 * ressult["varios"][0]["MAX(numvend)"] + 1);
        addEventContentVendedor();
    }
}
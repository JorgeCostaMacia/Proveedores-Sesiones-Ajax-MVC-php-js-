"use strict";

function inicFormPreciosum(){
    let parametros = "action=getPkPreciosum";
    ajaxQuery('controller/ajaxController.php', parametros ,'addValuesPreciosum', 'POST', 0);
}

function addValuesPreciosum(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addSelectPreciosum(ressult["varios"]);
        addEventContentPreciosum();
    }
}
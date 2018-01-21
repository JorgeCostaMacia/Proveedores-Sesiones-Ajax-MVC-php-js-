"use strict";

function searchVendedor(){
    msjClean();

    let itemSearch = document.getElementById("itemSearch").value;
    let typeSearch = document.getElementById("typeSearch").value;
    let campSearch = document.getElementById("campSearch").value;

    let parametros = "action=searchVendedor" + "&itemSearch=" + itemSearch + "&typeSearch=" + typeSearch + "&campSearch=" + campSearch;
    ajaxQuery('controller/ajaxController.php', parametros ,'getSearchVendedor', 'POST', 0);
}

function getSearchVendedor(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else if(ressult["vendedores"].length > 0) {
        addformVendedor(ressult["vendedores"]);
        getDisabledVendedor();
        addEventsUpdateVendedor(ressult["vendedores"]);
    }
    else {
        addClassHome();
        msjInfo('No existe del campo buscado');
    }
}

function getDisabledVendedor(){
    let parametros = "action=getDisabledVendedor";
    ajaxQuery('controller/ajaxController.php', parametros ,'returnGetDisabledVendedor', 'POST', 0);
}

function  returnGetDisabledVendedor(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        disableBorrarVendedor(ressult["vendedores"]);
    }
}
"use strict";

function searchPreciosum(){
    msjClean();

    let itemSearch = document.getElementById("itemSearch").value;
    let typeSearch = document.getElementById("typeSearch").value;
    let campSearch = document.getElementById("campSearch").value;

    let parametros = "action=searchPreciosum" + "&itemSearch=" + itemSearch + "&typeSearch=" + typeSearch + "&campSearch=" + campSearch;
    ajaxQuery('controller/ajaxController.php', parametros ,'getSearchPreciosum', 'POST', 0);
}

function getSearchPreciosum(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else if(ressult["preciosums"].length > 0) {
        addformPreciosum(ressult["preciosums"])
        addEventsUpdatePreciosum(ressult["preciosums"]);
    }
    else {
        addClassHome();
        msjInfo('No existe del campo buscado');
    }
}
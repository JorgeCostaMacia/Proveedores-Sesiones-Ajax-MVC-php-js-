"use strict";

function searchPieza(){
    msjClean();

    let itemSearch = document.getElementById("itemSearch").value;
    let typeSearch = document.getElementById("typeSearch").value;
    let campSearch = document.getElementById("campSearch").value;

    let parametros = "action=searchPieza" + "&itemSearch=" + itemSearch + "&typeSearch=" + typeSearch + "&campSearch=" + campSearch;
    ajaxQuery('controller/ajaxController.php', parametros ,'getSearchPieza', 'POST', 0);
}

function getSearchPieza(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else if(ressult["piezas"].length > 0) {
        addformPieza(ressult["piezas"]);
        getDisabledPiezaDel();
        getDisabledPiezaUpd();
        addEventsUpdatePieza(ressult["piezas"]);
    }
    else {
       addClassHome();
       msjInfo('No existe del campo buscado');
   }
}

function getDisabledPiezaDel(){
    let parametros = "action=getDisabledPiezaDel";
    ajaxQuery('controller/ajaxController.php', parametros ,'returnGetDisabledPiezaDel', 'POST', 0);
}

function getDisabledPiezaUpd(){
    let parametros = "action=getDisabledPiezaUpd";
    ajaxQuery('controller/ajaxController.php', parametros ,'returnGetDisabledPiezaUpd', 'POST', 0);
}

function  returnGetDisabledPiezaDel(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        disableBorrarPieza(ressult["piezas"]);
    }
}

function returnGetDisabledPiezaUpd(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        disableModificarPieza(ressult["piezas"]);
    }
}
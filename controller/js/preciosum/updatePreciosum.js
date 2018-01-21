"use strict";

function updatePreciosum(event){
    msjClean();

    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numpieza = arrayName[1];
    let numvend = arrayName[2];
    let id = '---' + numpieza + '---' + numvend;

    numpieza = document.getElementById("numpieza" + id).value;
    numvend = document.getElementById("numvend" + id).value;
    let preciounit = document.getElementById("preciounit" + id).value;
    let diassum = document.getElementById("diassum" + id).value;
    let descuento = document.getElementById("descuento" + id).value;

    let errores = [];

    if(!validatePrecioSumAdd(preciounit)) {
        errores.push(true);
        addClassHome();
        msjDanger("Preciounit solo admite numeros enteros positivos");
    }

    if(!validatePrecioSumAdd(diassum)) {
        errores.push(true);
        addClassHome();
        msjDanger("Diassum solo admite numeros enteros positivos");
    }

    if(!validatePrecioSumAdd(descuento)) {
        errores.push(true);
        addClassHome();
        msjDanger("Descuento solo admite numeros enteros positivos");
    }

    if(errores.length == 0){
        let parametros = "action=updatePreciosum" + "&numpieza=" + numpieza + "&numvend=" + numvend + "&preciounit=" + preciounit + "&diassum=" + diassum + "&descuento=" + descuento ;
        ajaxQuery('controller/ajaxController.php', parametros ,'ressultUpdatePreciosum', 'POST', 0);
    }
}

function ressultUpdatePreciosum(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha modificado correctamente");
    }
}
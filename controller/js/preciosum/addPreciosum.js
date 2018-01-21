"use strict";

function evaladdPreciosum(){
    msjClean();

    let numpieza = document.getElementById("numpieza").value;
    let numvend = document.getElementById("numvend").value;
    let preciounit = document.getElementById("preciounit").value;
    let diassum = document.getElementById("diassum").value;
    let descuento = document.getElementById("descuento").value;

    let errores = [];

    if(!validatePrecioSumAdd(preciounit)) {
        errores.push(true);
        addClassHome();
        addMsjDanger("Preciounit solo admite numeros enteros positivos");
    }

    if(!validatePrecioSumAdd(diassum)) {
        errores.push(true);
        addClassHome();
        addMsjDanger("Diassum solo admite numeros enteros positivos");
    }

    if(!validatePrecioSumAdd(descuento)) {
        errores.push(true);
        addClassHome();
        msjDanger("Descuento solo admite numeros enteros positivos");
    }

    if(errores.length == 0){
        let parametros = "action=existPreciosum" + "&numpieza=" + numpieza + "&numvend=" + numvend;
        ajaxQuery('controller/ajaxController.php', parametros ,'evalExistPreciosum', 'POST', 0);
    }
}

function evalExistPreciosum(resultado){
    let ressult = JSON.parse(resultado);

    let numpieza = document.getElementById("numpieza").value;
    let numvend = document.getElementById("numvend").value;
    let preciounit = document.getElementById("preciounit").value;
    let diassum = document.getElementById("diassum").value;
    let descuento = document.getElementById("descuento").value;

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        if(ressult["preciosums"].length == 0){
            let parametros = "action=addPreciosum" + "&numpieza=" + numpieza + "&numvend=" + numvend + "&preciounit=" + preciounit + "&diassum=" + diassum + "&descuento=" + descuento;
            ajaxQuery('controller/ajaxController.php', parametros ,'addRessultPreciosum', 'POST', 0);
        }
        else {
            addClassHome();
            msjDanger("Ya existe ese preciosum, escoge otro numpieza y numvend");
        }
    }
}

function addRessultPreciosum(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha guardado correctamente");
    }
}
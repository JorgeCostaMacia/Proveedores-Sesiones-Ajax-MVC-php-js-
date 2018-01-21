"use strict";

function evaladdPieza(){
    msjClean();

    let numpieza = document.getElementById("numpieza").value;
    let nompieza = document.getElementById("nompieza").value;
    let preciovent = document.getElementById("preciovent").value;

    let errores = [];

    if(!validateNumPiezaNomPieza(numpieza)) {
        errores.push(true);
        addClassHome();
        msjDanger("Numpieza solo admite letras, espacios, puntos, comas, barra y numeros");
    }

    if(!validateNumPiezaNomPieza(nompieza)) {
        errores.push(true);
        addClassHome();
        msjDanger("Nompieza solo admite letras, espacios, puntos, comas, barra y numeros");
    }

    if(!validatePreciovent(preciovent)) {
        errores.push(true);
        addClassHome();
        msjDanger("Descuento solo admite numeros enteros positivos");
    }

    if(errores.length == 0){
        let parametros = "action=existPieza" + "&numpieza=" + numpieza;
        ajaxQuery('controller/ajaxController.php', parametros ,'evalExistPieza', 'POST', 0);
    }
}

function evalExistPieza(resultado){
    let ressult = JSON.parse(resultado);

    let numpieza = document.getElementById("numpieza").value;
    let nompieza = document.getElementById("nompieza").value;
    let preciovent = document.getElementById("preciovent").value;

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        if(ressult["piezas"].length == 0){
            let parametros = "action=addPieza" + "&numpieza=" + numpieza + "&nompieza=" + nompieza + "&preciovent=" + preciovent;
            ajaxQuery('controller/ajaxController.php', parametros ,'addRessultPieza', 'POST', 0);
        }
        else {
            addClassHome();
            msjDanger("Ya existe esa pieza, escoge otro numpieza");
        }
    }
}

function addRessultPieza(resultado){
    let ressult = JSON.parse(resultado);

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha guardado correctamente");
    }
}
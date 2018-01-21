"use strict";

function updatePieza(event){
    msjClean();

    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numpieza = arrayName[1];
    let id = '---' + numpieza;

    numpieza = document.getElementById("numpieza" + id).value;
    let nompieza = document.getElementById("nompieza" + id).value;
    let preciovent = document.getElementById("preciovent" + id).value;


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
        let parametros = "action=updatePieza" + "&numpieza=" + numpieza + "&nompieza=" + nompieza + "&preciovent=" + preciovent ;
        ajaxQuery('controller/ajaxController.php', parametros ,'ressultUpdatePieza', 'POST', 0);
    }
}

function ressultUpdatePieza(resultado){
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
"use strict";

function evaladdVendedor(){
    msjClean();

    let numvend = document.getElementById("numvend").value;
    let nomvend = document.getElementById("nomvend").value;
    let nombrecomer = document.getElementById("nombrecomer").value;
    let telefono = document.getElementById("telefono").value;
    let calle = document.getElementById("calle").value;
    let ciudad = document.getElementById("ciudad").value;
    let provincia = document.getElementById("provincia").value;
    let cod_postal = document.getElementById("cod_postal").value;

    let errores = [];

    if(!validateNombre(nomvend)) {
        errores.push(true);
        addClassHome();
        msjDanger("Nomvend solo admite letras y espacios");
    }

    if(!validateNomCom(nombrecomer)) {
        errores.push(true);
        addClassHome();
        msjDanger("Nomcomp solo admite letras y espacios");
    }

    if(!validateTelf(telefono)) {
        errores.push(true);
        addClassHome();
        msjDanger("Telefono solo admite numeros y guiones");
    }


    if(!validateCalle(calle)) {
        errores.push(true);
        msjDanger("Calle solo admite letras, espacios, puntos, comas, barra y numeros");
    }

    if(!validateCiudad(ciudad)) {
        errores.push(true);
        addClassHome();
        msjDanger("Ciudad solo admite letras y espacios");
    }


    if(!validateProvincia(provincia)) {
        errores.push(true);
        addClassHome();
        msjDanger("Provincia solo admite letras y espacios");
    }


    if(!validateCp(cod_postal)) {
        errores.push(true);
        addClassHome();
        msjDanger("Cod_postal solo admite numeros");
    }

    if(errores.length == 0){
        let parametros = "action=addVendedor" + '&numvend=' + numvend + '&nomvend=' + nomvend + '&nombrecomer=' + nombrecomer + '&telefono=' + telefono + '&calle=' + calle + '&ciudad=' + ciudad + '&provincia=' + provincia + '&cod_postal=' + cod_postal;
        ajaxQuery('controller/ajaxController.php', parametros ,'addRessultVendedor', 'POST', 0);
    }
}

function addRessultVendedor(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha guardado correctamente");
        inicFormVendedor();
    }
}
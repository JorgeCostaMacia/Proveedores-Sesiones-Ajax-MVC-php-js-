"use strict";

function updateVendedor(event){
    msjClean();

    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numvend = arrayName[1];
    let id = '---' + numvend;

    let nomvend = document.getElementById("nomvend" + id).value;
    let nombrecomer = document.getElementById("nombrecomer" + id).value;
    let telefono = document.getElementById("telefono" + id).value;
    let calle = document.getElementById("calle" + id).value;
    let ciudad = document.getElementById("ciudad" + id).value;
    let provincia = document.getElementById("provincia" + id).value;
    let cod_postal = document.getElementById("cod_postal" + id).value;

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
        addClassHome();
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
        let parametros = "action=updateVendedor" + '&numvend=' + numvend + '&nomvend=' + nomvend + '&nombrecomer=' + nombrecomer + '&telefono=' + telefono + '&calle=' + calle + '&ciudad=' + ciudad + '&provincia=' + provincia + '&cod_postal=' + cod_postal;
        ajaxQuery('controller/ajaxController.php', parametros ,'ressultUpdateVendedor', 'POST', 0);
    }
}

function ressultUpdateVendedor(resultado){
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
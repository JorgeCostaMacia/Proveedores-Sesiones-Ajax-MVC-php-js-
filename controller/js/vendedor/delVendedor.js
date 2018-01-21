"use strict";

function delVendedor(event){
    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numvend = arrayName[1];

    let parametros = "action=delVendedor" + "&numvend=" + numvend;
    ajaxQuery('controller/ajaxController.php', parametros ,'ressultDelVendedor', 'POST', 0);
}

function ressultDelVendedor(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha borrado correctamente");
        delTrVendedor('tr---' + ressult["varios"][1]);
    }
}
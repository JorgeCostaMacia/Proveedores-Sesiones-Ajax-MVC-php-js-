"use strict";

function delPreciosum(event){
    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numpieza = arrayName[1];
    let numvend = arrayName[2];

    let parametros = "action=delPreciosum" + "&numpieza=" + numpieza + "&numvend=" + numvend;
    ajaxQuery('controller/ajaxController.php', parametros ,'ressultDelPreciosum', 'POST', 0);
}


function ressultDelPreciosum(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha borrado correctamente");
        delTrPreciosum('tr---' + ressult["varios"][1] + '---' + ressult["varios"][2]);
    }
}
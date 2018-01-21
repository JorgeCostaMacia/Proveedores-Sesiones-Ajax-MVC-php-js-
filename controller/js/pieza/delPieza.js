"use strict";

function delPieza(event){
    let inputName = event.target.name;
    let arrayName = inputName.split("---");
    let numpieza = arrayName[1];

    let parametros = "action=delPieza" + "&numpieza=" + numpieza;
    ajaxQuery('controller/ajaxController.php', parametros ,'ressultDelPieza', 'POST', 0);
}


function ressultDelPieza(resultado){
    let ressult = JSON.parse(resultado);

    msjClean();

    if(ressult["errores"].length != 0){
        addClassHome();
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else {
        addClassHome();
        msjSucces("Se ha borrado correctamente");
        delTrPieza('tr---' + ressult["varios"][1]);
    }
}
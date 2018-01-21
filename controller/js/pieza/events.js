"use strict";

function addEventsPieza(){
    let buscarPieza = document.getElementById("buscarPieza");
    if(buscarPieza != null ){ buscarPieza.addEventListener('click', searchPieza); }

    addEventContentPieza();
}

function addEventContentPieza(){
    let addPieza = document.getElementById("addPieza");
    if(addPieza != null ){ addPieza.addEventListener("click", evaladdPieza); }
}

function addEventsUpdatePieza(piezas){
    for(let i = 0; i < piezas.length; i++){
        let id = piezas[i]["NUMPIEZA"];
        let buttonModificar = document.getElementById("modificar---" + id);
        let buttonBorrar = document.getElementById("borrar---" + id);

        buttonModificar.addEventListener("click", updatePieza);
        buttonBorrar.addEventListener("click", delPieza);
    }
}
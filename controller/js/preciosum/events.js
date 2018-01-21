"use strict";

function addEventsPreciosum(){
    let buscarPreciosum = document.getElementById("buscarPreciosum");
    if(buscarPreciosum != null ){ buscarPreciosum.addEventListener('click', searchPreciosum); }

    let addPreciosum = document.getElementById("addPreciosum");
    if(addPreciosum != null ){ inicFormPreciosum(); }
}

function addEventContentPreciosum(){
    let addPreciosum = document.getElementById("addPreciosum");
    if(addPreciosum != null ){ addPreciosum.addEventListener("click", evaladdPreciosum); }
}

function addEventsUpdatePreciosum(preciosum){
    for(let i = 0; i < preciosum.length; i++){
        let id = preciosum[i]["NUMPIEZA"] + "---" + preciosum[i]["NUMVEND"];
        let buttonModificar = document.getElementById("modificar---" + id);
        let buttonBorrar = document.getElementById("borrar---" + id);

        buttonModificar.addEventListener("click", updatePreciosum);
        buttonBorrar.addEventListener("click", delPreciosum);
    }
}
"use strict";

function addEventsVendedor(){
    let buscarVendedor = document.getElementById("buscarVendedor");
    if(buscarVendedor != null ){ buscarVendedor.addEventListener('click', searchVendedor); }

    let addVendedor = document.getElementById("addVendedor");
    if(addVendedor != null ){ inicFormVendedor(); }
}

function addEventContentVendedor(){
    let addVendedor = document.getElementById("addVendedor");
    if(addVendedor != null ){ addVendedor.addEventListener("click", evaladdVendedor); }
}

function addEventsUpdateVendedor(vendedor){
    for(let i = 0; i < vendedor.length; i++){
        let id = vendedor[i]["NUMVEND"];
        let buttonModificar = document.getElementById("modificar---" + id);
        let buttonBorrar = document.getElementById("borrar---" + id);

        buttonModificar.addEventListener("click", updateVendedor);
        buttonBorrar.addEventListener("click", delVendedor);
    }
}
"use strict";

function addTablaPieza(){
    let tablaVendedor = document.getElementById("tablaPieza");

    tablaVendedor.innerHTML = "";

    let h2Node = document.createElement('h2');
    let textNode = document.createTextNode("Pieza");
    h2Node.appendChild(textNode);
    tablaVendedor.appendChild(h2Node);

    let tableNode = document.createElement('table');
    tableNode.setAttribute('class', 'table table-hover');

    let theadNode = document.createElement('thead');

    let trNode = document.createElement('tr');
    let thNode = document.createElement('th');
    textNode = document.createTextNode("Numpieza");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Nompieza");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Preciovent");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    trNode.appendChild(thNode);

    theadNode.appendChild(trNode);
    tableNode.appendChild(theadNode);

    let tbodyNode = document.createElement('tbody');
    tbodyNode.setAttribute('name', 'tbody');
    tbodyNode.setAttribute('id', 'tbody');

    tableNode.appendChild(tbodyNode);
    tablaVendedor.appendChild(tableNode);
}

function addformPieza(ressult){
    addTablaPieza();

    let tbody = document.getElementById("tbody");

    for(let i= 0; i < ressult.length; i++){
        let id = ressult[i]["NUMPIEZA"];

        let trNode = document.createElement('tr');
        trNode.setAttribute('id', 'tr---' + id);
        trNode.setAttribute('name', 'tr---' + id);

        let tdNode = document.createElement('td');
        let inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'numpieza---' + id);
        inputNode.setAttribute('id', 'numpieza---' + id);
        inputNode.setAttribute('maxlength', '16');
        inputNode.setAttribute('value', ressult[i]["NUMPIEZA"]);
        inputNode.setAttribute('class', 'form-control');
        inputNode.setAttribute('disabled', 'true');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'nompieza---' + id);
        inputNode.setAttribute('id', 'nompieza---' + id);
        inputNode.setAttribute('maxlength', '30');
        inputNode.setAttribute('value', ressult[i]["NOMPIEZA"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'preciovent---' + id);
        inputNode.setAttribute('id', 'preciovent---' + id);
        inputNode.setAttribute('maxlength', '30');
        inputNode.setAttribute('value', ressult[i]["PRECIOVENT"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('button');
        inputNode.setAttribute('type', 'button');
        inputNode.setAttribute('class', 'btn btn-warning form-control');
        inputNode.setAttribute('id', 'modificar---' + id);
        inputNode.setAttribute('name', 'modificar---' + id);
        let textNode = document.createTextNode("Modificar");
        inputNode.appendChild(textNode);
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('button');
        inputNode.setAttribute('type', 'button');
        inputNode.setAttribute('class', 'btn btn-danger form-control');
        inputNode.setAttribute('id', 'borrar---' + id);
        inputNode.setAttribute('name', 'borrar---' + id);
        textNode = document.createTextNode("Borrar");
        inputNode.appendChild(textNode);
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tbody.appendChild(trNode);
    }
}

function disableBorrarPieza(piezas){
    for(let i = 0; i < piezas.length; i++){
        let borrar = document.getElementById("borrar---" + piezas[i]["NUMPIEZA"]);
        borrar.setAttribute('disabled', 'false');
    }
}

function disableModificarPieza(piezas){
    for(let i = 0; i < piezas.length; i++){
        let borrar = document.getElementById("modificar---" + piezas[i]["NUMPIEZA"]);
        borrar.setAttribute('disabled', 'false');
    }
}

function delTrPieza(idTr){
    let idTrNode = document.getElementById(idTr);
    idTrNode.innerHTML = "";
}
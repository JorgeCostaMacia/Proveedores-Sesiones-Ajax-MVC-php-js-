"use strict";

function addSelectPreciosum(pks){
    msjClean();

    let numpieza = document.getElementById("numpieza");
    let numvend = document.getElementById("numvend");

    for(let i = 0; i < pks[0].length; i++){
        let optionjNode = document.createElement('option');
        optionjNode.setAttribute('value', pks[0][i]["numpieza"]);
        let text = document.createTextNode(pks[0][i]["numpieza"]);
        optionjNode.appendChild(text);
        numpieza.appendChild(optionjNode);
    }

    for(let i = 0; i < pks[1].length; i++){
        let optionjNode = document.createElement('option');
        optionjNode.setAttribute('value', pks[1][i]["numvend"]);
        let text = document.createTextNode(pks[1][i]["numvend"]);
        optionjNode.appendChild(text);
        numvend.appendChild(optionjNode);
    }
}

function addTablaPreciosum(){
    let tablaPreciosum = document.getElementById("tablaPreciosum");

    tablaPreciosum.innerHTML = "";

    let h2Node = document.createElement('h2');
    let textNode = document.createTextNode("Preciosum");
    h2Node.appendChild(textNode);
    tablaPreciosum.appendChild(h2Node);

    let tableNode = document.createElement('table');
    tableNode.setAttribute('class', 'table table-hover');

    let theadNode = document.createElement('thead');

    let trNode = document.createElement('tr');
    let thNode = document.createElement('th');
    textNode = document.createTextNode("Numpieza");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Numvend");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Nomvend");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Provincia");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Preciounit");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Diassum");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Descuento");
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
    tablaPreciosum.appendChild(tableNode);
}

function addformPreciosum(ressult){
    addTablaPreciosum();

    let tbody = document.getElementById("tbody");

    for(let i= 0; i < ressult.length; i++){
        let id = ressult[i]["NUMPIEZA"] + "---" + ressult[i]["NUMVEND"];

        let trNode = document.createElement('tr');
        trNode.setAttribute('id', 'tr---' + id);
        trNode.setAttribute('name', 'tr---' + id);

        let tdNode = document.createElement('td');
        let inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'numpieza---' + id);
        inputNode.setAttribute('id', 'numpieza---' + id);
        inputNode.setAttribute('value', ressult[i]["NUMPIEZA"]);
        inputNode.setAttribute('class', 'form-control');
        inputNode.setAttribute('disabled', 'true');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'numvend---' + id);
        inputNode.setAttribute('id', 'numvend---' + id);
        inputNode.setAttribute('value', ressult[i]["NUMVEND"]);
        inputNode.setAttribute('class', 'form-control');
        inputNode.setAttribute('disabled', 'true');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'nomvend---' + id);
        inputNode.setAttribute('id', 'nomvend---' + id);
        inputNode.setAttribute('value', ressult[i]["NOMVEND"]);
        inputNode.setAttribute('class', 'form-control');
        inputNode.setAttribute('disabled', 'true');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'provincia---' + id);
        inputNode.setAttribute('id', 'provincia---' + id);
        inputNode.setAttribute('value', ressult[i]["PROVINCIA"]);
        inputNode.setAttribute('class', 'form-control');
        inputNode.setAttribute('disabled', 'true');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'number');
        inputNode.setAttribute('name', 'preciounit---' + id);
        inputNode.setAttribute('id', 'preciounit---' + id);
        inputNode.setAttribute('value', ressult[i]["PRECIOUNIT"]);
        inputNode.setAttribute('min', "0");
        inputNode.setAttribute('step', "1");
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'number');
        inputNode.setAttribute('name', 'diassum---' + id);
        inputNode.setAttribute('id', 'diassum---' + id);
        inputNode.setAttribute('value', ressult[i]["DIASSUM"]);
        inputNode.setAttribute('min', "0");
        inputNode.setAttribute('step', "1");
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'number');
        inputNode.setAttribute('name', 'descuento---' + id);
        inputNode.setAttribute('id', 'descuento---' + id);
        inputNode.setAttribute('value', ressult[i]["DESCUENTO"]);
        inputNode.setAttribute('min', "0");
        inputNode.setAttribute('step', "1");
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

function delTrPreciosum(idTr){
    let idTrNode = document.getElementById(idTr);
    idTrNode.innerHTML = "";
}
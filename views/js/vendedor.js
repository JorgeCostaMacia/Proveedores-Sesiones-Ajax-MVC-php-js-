"use strict";

function addPkVendedor(pks){
    let numvend = document.getElementById("numvend");
    numvend.setAttribute('value', pks);
}

function addTablaVendedor(){
    let tablaVendedor = document.getElementById("tablaVendedor");

    tablaVendedor.innerHTML = "";

    let h2Node = document.createElement('h2');
    let textNode = document.createTextNode("Vendedor");
    h2Node.appendChild(textNode);
    tablaVendedor.appendChild(h2Node);

    let tableNode = document.createElement('table');
    tableNode.setAttribute('class', 'table table-hover');

    let theadNode = document.createElement('thead');

    let trNode = document.createElement('tr');
    let thNode = document.createElement('th');
    textNode = document.createTextNode("Numvend");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Nomvend");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Nombrecomer");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Telefono");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Calle");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Ciudad");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Provincia");
    thNode.appendChild(textNode);
    trNode.appendChild(thNode);

    thNode = document.createElement('th');
    textNode = document.createTextNode("Cod_postal");
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

function addformVendedor(ressult){
    addTablaVendedor();

    let tbody = document.getElementById("tbody");

    for(let i= 0; i < ressult.length; i++){
        let id = ressult[i]["NUMVEND"];

        let trNode = document.createElement('tr');
        trNode.setAttribute('id', 'tr---' + id);
        trNode.setAttribute('name', 'tr---' + id);

        let tdNode = document.createElement('td');
        let inputNode = document.createElement('input');
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
        inputNode.setAttribute('maxlength', '30');
        inputNode.setAttribute('value', ressult[i]["NOMVEND"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'nombrecomer---' + id);
        inputNode.setAttribute('id', 'nombrecomer---' + id);
        inputNode.setAttribute('maxlength', '30');
        inputNode.setAttribute('value', ressult[i]["NOMBRECOMER"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'telefono---' + id);
        inputNode.setAttribute('id', 'telefono---' + id);
        inputNode.setAttribute('maxlength', '15');
        inputNode.setAttribute('value', ressult[i]["TELEFONO"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'calle---' + id);
        inputNode.setAttribute('id', 'calle---' + id);
        inputNode.setAttribute('maxlength', '30');
        inputNode.setAttribute('value', ressult[i]["CALLE"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'ciudad---' + id);
        inputNode.setAttribute('id', 'ciudad---' + id);
        inputNode.setAttribute('maxlength', '20');
        inputNode.setAttribute('value', ressult[i]["CIUDAD"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'provincia---' + id);
        inputNode.setAttribute('id', 'provincia---' + id);
        inputNode.setAttribute('maxlength', '20');
        inputNode.setAttribute('value', ressult[i]["PROVINCIA"]);
        inputNode.setAttribute('class', 'form-control');
        tdNode.appendChild(inputNode);
        trNode.appendChild(tdNode);

        tdNode = document.createElement('td');
        inputNode = document.createElement('input');
        inputNode.setAttribute('type', 'text');
        inputNode.setAttribute('name', 'cod_postal---' + id);
        inputNode.setAttribute('id', 'cod_postal---' + id);
        inputNode.setAttribute('maxlength', '5');
        inputNode.setAttribute('value', ressult[i]["COD_POSTAL"]);
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

function disableBorrarVendedor(vendedores){
    for(let i = 0; i < vendedores.length; i++){
        let borrar = document.getElementById("borrar---" + vendedores[i]["NUMVEND"]);
        if(borrar != null){ borrar.setAttribute('disabled', 'false'); }
    }
}

function delTrVendedor(idTr){
    let idTrNode = document.getElementById(idTr);
    idTrNode.innerHTML = "";
}
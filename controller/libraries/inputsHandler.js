"use strict";

function validateNickLogin(loginNick) {
	if(esTexto(loginNick) && loginNick.length >= 5){ return true; }
	else { return false; }
}

function validatePassLogin(loginPass) {
	if(esTexto(loginPass) && loginPass.length >= 8) { return true; }
	else { return false; }	
}
function validateNombre(nombre){
    if(esTextoEspacio(nombre) && nombre.length >= 3){ return true; }
    else { return false; }
}

function validateNomCom(nomCom){
    if(esTextoEspacio(nomCom) && nomCom.length >= 3){ return true; }
    else { return false; }
}

function validateTelf(telf){
    if(esNumeroGuion(telf) && telf.length >= 9){ return true; }
    else { return false; }
}

function validateCalle(calle){
    if(esTextoEspacioPuntoComaBarraNumero(calle) && calle.length >= 5){ return true; }
    else { return false; }
}

function validateCiudad(ciudad){
    if(esTextoEspacio(ciudad) && ciudad.length >= 3){ return true; }
    else { return false; }
}

function validateProvincia(provincia){
    if(esTextoEspacio(provincia) && provincia.length >= 3){ return true; }
    else { return false; }
}

function validateCp(cp){
    if(esNumeros(cp) && cp.length == 5){ return true; }
    else { return false; }
}

function validatePrecioSumAdd(num){
    if(parseInt(num) == 0){ return true; }
    else if(esNumeroPositivoEntero(num)){ return true; }
    else { return false; }
}

function validateNumPiezaNomPieza(numpieza){
    if(esTextoEspacioPuntoComaBarraGuionNumero(numpieza) && numpieza.length >= 1){ return true; }
    else { return false; }
}

function validatePreciovent(preciovent){
    if(esNumeroPositivoEntero(preciovent)){ return true; }
    else { return false; }
}
"use strict";

function addformGetAccount(){
    msjClean();

    let formAcountContainner = document.getElementById("formAcountContainer");
    let formLoginContainer = document.getElementById("formLoginContainer");

    formLoginContainer.setAttribute("class", "container hidden");
    formAcountContainner.setAttribute("class", "container");
}

function addformLogin(){
    msjClean();

    let formAcountContainner = document.getElementById("formAcountContainer");
    let formLoginContainer = document.getElementById("formLoginContainer");

    formAcountContainner.setAttribute("class", "container hidden");
    formLoginContainer.setAttribute("class", "container");
}
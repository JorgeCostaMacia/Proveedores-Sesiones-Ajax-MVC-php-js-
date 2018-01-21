"use strict";

function addEventsNav(){
    let homeNav = document.getElementById("homeNav");
    if(homeNav != null ){ homeNav.addEventListener("click", redirectHome); }

    let preciosumNav = document.getElementById("preciosumNav");
    if(preciosumNav != null ){ preciosumNav.addEventListener("click", redirectPreciosum); }

    let vendedorNav = document.getElementById("vendedorNav");
    if(vendedorNav != null ){ vendedorNav.addEventListener("click", redirectVendedor); }

    let piezaNav = document.getElementById("piezaNav");
    if(piezaNav != null ){ piezaNav.addEventListener("click", redirectPieza); }

    let logoutNav = document.getElementById("logoutNav");
    if(logoutNav != null ){ logoutNav.addEventListener("click", redirectLogin); }
}

function redirectHome() { window.location.replace("index.php"); }
function redirectPreciosum() { window.location.replace("index.php?page=preciosum"); }
function redirectVendedor() { window.location.replace("index.php?page=vendedor"); }
function redirectPieza() { window.location.replace("index.php?page=pieza"); }
function redirectLogin() { window.location.replace("index.php?page=login"); }
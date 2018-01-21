<?php

// ** PAGE = LoginAjax **
//      BORRA GET POST
//      BORRA SESION
//      CARGA FORM LoginAjax
//      DESCONECTA DE BD
if(isset($_GET["page"])){
    if($_GET["page"] == "login"){
        unset($_GET);
        unset($_POST);
        $_SESSION = [];
        session_destroy();
        include_once "views/assets/login.php";
    }
}

// ** !SESSION && !POST NICK PASS **
//      CARGA FORM LoginAjax
if(!isset($_SESSION['gestor']) && !isset($_POST["nick"]) && !isset($_POST["pass"]) ) {
    include_once "views/assets/login.php";
}

// ** POST FORM LoginAjax **
//      CREA SESION = NEW GESTOR = CARRITO USUARIO + LoginAjax USUARIO
if(isset($_POST["nick"]) && isset($_POST["pass"])) {
    $_SESSION['gestor'] = new Gestor($_POST["nick"]);
}

// ** SESION GESTOR **
//      RECOGE GET PAGE
if(isset($_SESSION['gestor'])) {
    include_once "views/layout/nav.php";
    if(isset($_GET["page"])) {
        $page = $_GET["page"];

        //$gestor = new Gestor();
        //$connection = new DBusser;

        //$gestor->searchVendedor($connection);
       // var_dump($gestor);

        if($page == "preciosum"){ include_once "views/assets/preciosum.php"; }
        else if($page == "vendedor"){ include_once "views/assets/vendedor.php"; }
        else if($page == "pieza"){ include_once "views/assets/pieza.php"; }
    }
}

include_once "includes/scriptsJS.php";
"use strict";

// ** LoginAjax **
//      RECOGE DATOS FORM LoginAjax
//      EVALUA FORMATO DATOS
//      GENERA PARAMETROS - LLAMA BD PARA LoginAjax
//      SI FALLA MUESTRA ADVERTENCIAS
function evalformLogin(){
    msjClean();

    let loginNick = document.getElementById("nick").value;
    let loginPass = document.getElementById("pass").value;

    let errores = [];

    if(validateNickLogin(loginNick)){ okNickLoginIcon(); }
    else {
        errores.push(true);
        badNickLoginIcon();
    }

    if(validatePassLogin(loginPass)) { okPassLoginIcon(); }
    else {
        errores.push(true);
        badPassLoginIcon();
    }

    if(errores.length == 0){
        let parametros = "action=login" + "&nick=" + loginNick + '&pass=' + loginPass;
        ajaxQuery('controller/ajaxController.php', parametros ,'checkExistLogin', 'POST', 0);
    }
}

// ** RETURN AJAX QUERY LoginAjax **
//      RECOGE CONSULTA BD
//      EVALUA RESSULT LoginAjax - LOGEA
//      SI FALLA MUESTRA ADVERTENCIAS
function checkExistLogin(resultado){
    let ressult = JSON.parse(resultado);

    if(ressult["errores"].length != 0){
        msjDanger(ressult["errores"][0]["ERRMESSAGE"]);
    }
    else if(ressult["logins"].length > 0) { formLogin.submit(); }
    else { msjDanger('No existe el usuario o la contraseña es erronea'); }
}
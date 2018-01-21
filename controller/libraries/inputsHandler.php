<?php

function esLetra($dato){
    if( (ord($dato) >= 65  && ord($dato) <= 90) || (ord($dato) >= 97 && ord($dato) <= 122) ||
        ord($dato) == 165 || ord($dato) == 164){
        return true;
    }
    else { return false; }
}

 function esTexto($dato){
    $ressult = true;

    if($dato != null || $dato != ""){
        for($i = 0; $i < strlen($dato); $i++){
            if(!esLetra($dato[$i] )){
                $ressult = false;
                $i = strlen($dato);
            }
        }
    }

    return $ressult;
}

function esNumero($dato){
    $ressult = false;

    if($dato != null || $dato != ""){
        if(is_numeric($dato)){ $ressult = true;
            if(is_int($dato)){
                if($dato % 1 == 0 && $dato >= 0){
                    $ressult = true;
                }
            }
        }
    }

    return $ressult;
}
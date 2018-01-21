<?php

spl_autoload_register('classAutoLoader');

function classAutoLoader($className){
    $dirPaths = [];
    $dirPaths[] = './';
    $dirPaths[] = 'controller/';
    $dirPaths[] = 'controller/libraries/';
    $dirPaths[] = 'libraries/';
    $dirPaths[] = 'model/';
    $dirPaths[] = 'model/classApp/';
    $dirPaths[] = 'classApp/';
    $dirPaths[] = 'model/classDB/';
    $dirPaths[] = 'classDB/';
    $dirPaths[] = 'model/entitiesDB/';
    $dirPaths[] = 'entitiesDB/';
    $dirPaths[] = '../controller/';
    $dirPaths[] = '../controller/libraries/';
    $dirPaths[] = '../model/';
    $dirPaths[] = '../model/classApp/';
    $dirPaths[] = '../model/classDB/';
    $dirPaths[] = '../model/entitiesDB/';
    $dirPaths[] = '../../controller/';
    $dirPaths[] = '../../controller/libraries/';
    $dirPaths[] = '../../model/';
    $dirPaths[] = '../../model/classApp/';
    $dirPaths[] = '../../model/classDB/';

    foreach($dirPaths as $path){
        $classPath = $path . $className . '.php';
        if (file_exists($classPath) && is_file($classPath)) {
            include_once $classPath;
        }
    }

    foreach($dirPaths as $path){
        $functionPath = $path . "inputsHandler.php";
        if (file_exists($functionPath) && is_file($functionPath)) {
            include_once $functionPath;
        }
    }
}
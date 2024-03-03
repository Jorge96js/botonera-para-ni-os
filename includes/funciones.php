<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

    //mostrar errores
    function phpErrores(){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    }
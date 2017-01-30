<?php

header('Content-Type: application/json; charset:utf-8');
$myInput = file_get_contents('php://input');
$obj = json_decode($myInput, true);

if (json_last_error() == 0) {
    $idGrua = ($obj["idGrua"]);
    $mToken = ($obj["mToken"]);
} else {
    echo(JSONerror());
    exit();
}

//------------------------------
//Creando el $link de conexiones
//------------------------------
include_once 'conexion.php';

//------------------------------
//Query a la DB
//------------------------------
$Tabla = "Gruas";
$LastUpdate = date(gmdate('Y-m-d H:i:s', time() - (4 * 3600)));
$result = $link->query("UPDATE $Tabla SET Token = '$mToken',"
        . "LastUpdate = '$LastUpdate' WHERE idGrua = '$idGrua'");

//------------------------------
//Verificando el resultado
//------------------------------
if ($result) {
    $jsonData = (array('Success' => "Token GCM Registrado"));
    $json_array = json_encode($jsonData, JSON_UNESCAPED_UNICODE);
    EndLogin($json_array, $link);
} else {
    Error($link->error, $link);
}


//------------------------------
//Error del $link, asosicado a la DB
//------------------------------
function Error($error, $link) {
    $data = (array('Error' => $error));
    $json_array = json_encode($data, JSON_UNESCAPED_UNICODE);
    EndLogin($json_array, $link);
}

//------------------------------
//Cerrando la conexión.
//------------------------------
function EndLogin($json_array, $link) {
    echo ($json_array);
    $link->close();
    exit();
}

//------------------------------
//Error del JSON
//------------------------------
function JSONerror() {
    $jsonData = (array('Error' => json_last_error_msg()));
    $json_array = json_encode($jsonData, JSON_UNESCAPED_UNICODE);
    return $json_array;
}

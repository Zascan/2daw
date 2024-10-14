<?php
include_once("247ok.php");
include_once("247ko.php");

    $user = $_GET["user"];
    $passwd = $_GET["password"];

    $usuarios = ["syan07" => "syan0707", "zascan" => "zas", "chupa" => "chupapa"];

    if (isset($usuarios[$user])) {
        if ($usuarios[$user] === $passwd) {
            imprimirBien();
        } else {
           imprimirMalContrasenia();
           redirect();
        }
    } else {
        imprimirMalUsuario();
    }
?>
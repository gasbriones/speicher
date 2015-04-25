<?php
    session_start();
    if ($_GET["idioma"]) {
        $_SESSION["idioma"] = $_GET["idioma"];
    } elseif (!$_SESSION["idioma"]) {
        $_SESSION["idioma"] = "es";
    }
    include($_SESSION["idioma"] . ".php");
?>
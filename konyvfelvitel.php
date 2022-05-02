<?php
include_once("db_fuggvenyek.php");
$konyvszam = $_REQUEST["konyvszam"];
$szerzo = $_REQUEST["szerzo"];
$cim = $_REQUEST["cim"];
$kiado = $_REQUEST["kiado"];
$ev = $_REQUEST["ev"];

konyvetbeszur($konyvszam,$szerzo,$cim,$kiado,$ev);
header("Location: konyvek.php")
?>
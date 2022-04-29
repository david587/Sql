<?php
//adatbázis függvény amit használni kell

function konyvtar_csatlakozas(){
    $con=mysqli_connect("localhost","root","") or die("Csatlakozási hiba");
    if(mysqli_select_db($con,"konyvtar")==false)
{
    return null;
}
return $con;
}

function konyvlistaLeker(){
    if(!($con=konyvtar_csatlakozas()))
{return false;}
$result= mysqli_query($con,"Select * from konyvek;");
mysqli_close($con);
return $result;
}

function konyvetbeszur($konyvszam,$szerzo,$cim,$kiado,$ev)
{
    if(!($con=konyvtar_csatlakozas()))
{return false;}

$stmt=mysqli_prepare($con,"insert into konyvek(konyvszam,szerzo,cim,kiado,ev) values (?,?,?,?,?)");
mysqli_stmt_bind_param($stmt,"ssssd",$konyvszam,$szerzo,$cim,$kiado,$ev);
$result = mysqli_stmt_execute($stmt);

mysqli_close($con);
return $result;
}
?>
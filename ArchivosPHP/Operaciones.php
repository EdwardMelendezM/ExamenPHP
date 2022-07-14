<?php
include("Funciones.php");
$file_Uni=$_FILES["csvUni"]["name"];
$file_tmpUni=$_FILES["csvUni"]["tmp_name"];
$file_ErrorUni=$_FILES["csvUni"]["error"];


$file_Tuto=$_FILES["csvTuto"]["name"];
$file_tmpTuto=$_FILES["csvTuto"]["tmp_name"];
$file_ErrorTuto=$_FILES["csvTuto"]["error"];


if($file_ErrorTuto==0 & $file_ErrorUni==0)
{
    $file_exUni=explode(".",$file_Uni);
    $file_exTuto=explode(".",$file_Tuto);

    $file_exUni=strtolower(end($file_exUni));
    $file_exTuto=strtolower(end($file_exTuto));

    $file_newUni=uniqid("",true).".txt";
    $file_newTuto=uniqid("",true).".txt";
    

    $file_path = "ArchivosPHP/";
    if (!file_exists($file_path))
    {
        mkdir($file_path, 0777, true);
    }


    $DireccionUni="ArchivosPHP/".$file_newUni;
    $DireccionTuto="ArchivosPHP/".$file_newTuto;

    move_uploaded_file($file_tmpUni,$DireccionUni);
    move_uploaded_file($file_tmpTuto,$DireccionTuto);   
}

$ListaGeneral="";
$ListaTutorados="";

$archivoUni=fopen($DireccionUni,"r") or die("Error al abrir");
while(!feof($archivoUni))
{
    $traer = fgets($archivoUni);
    $saltodelinea=nl2br($traer);
    $Palabra= utf8_encode( $saltodelinea);
    $ListaGeneral=$ListaGeneral.$Palabra;
}
$archivoTuto=fopen($DireccionTuto,"r") or die("Error al abrir");
while(!feof($archivoTuto))
{
    $traer = fgets($archivoTuto);
    $saltodelinea1=nl2br($traer);
    $Palabra= utf8_encode( $saltodelinea1);
    $ListaTutorados=$ListaTutorados.$Palabra;
}

//----------------------------------------------------
//               PROGRAMA PRINCIPAL
//-------------------------------------------------------
$ListaUniversal=ListaAlumnosTresColumnas($ListaGeneral);
$ListaTutorados=ListaAlumnosDosColumnas($ListaTutorados);
$ListaFinal=CompararListas($ListaTutorados,$ListaUniversal);

header("Exam.php");

?>
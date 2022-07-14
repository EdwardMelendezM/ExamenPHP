<?php

//-------------------------------------------------
//        Separar Codigo y Alumno 3 Columnas
//-------------------------------------------------
function ListaAlumnosTresColumnas($Lista)
{
    $Nueva=array();
    $token = strtok($Lista, "\n\t");
    while($token != false) 
    {
        $part1=(string)$token;
        $part2=(string)$token;
        $part3=(string)$token;

        $PartUno=Parte1($part1);
        $PartDos=Parte2($part2);
        $PartTres=Parte3($part3);

        $ParteNumUno=(integer)$PartUno;
        $ParteNumDos=(integer)$PartDos;
        $ParteNumTres=(integer)$PartTres;

       if($ParteNumDos!=0 & $ParteNumTres==0)
       { $Nueva[$PartDos]=$PartTres; }
       $token = strtok("\n\t");
    }
    return $Nueva;
}

//--------------------------------------------------
//      Separar Codigo y Alumno Para 2 columnas
//--------------------------------------------------
function ListaAlumnosDosColumnas($Lista)
{
    $Nueva=array();
    $token = strtok($Lista, "\n\t");
    while($token != false) 
    {
        $part1=(string)$token;
        $part2=(string)$token;

        $PartUno=Parte1($part1);
        $PartDos=Parte3($part2);

        $ParteNumUno=(integer)$PartUno;
        $ParteNumDos=(integer)$PartDos;

       if($ParteNumUno!=0 & $ParteNumDos==0)
       { $Nueva[$PartUno]=$PartDos; }
       $token = strtok("\n\t");
    }
    return $Nueva;
}


//-------------------------------------------
//            Separar Parte 1
//-------------------------------------------
function Parte1($string)
{
    $Codigo="";
    for ($i=0 ; $i < strlen($string) ; $i++)
    {
        if($string[$i]==",")
        {
            return $Codigo;
        }
        $Codigo=$Codigo.$string[$i];
    }
}

//-------------------------------------------
//            Separar Parte 3
//-------------------------------------------
function Parte3($string)
{
    $Codigo="";
    for ($j=0 ; $j < strlen($string) ; $j++)
    {
        if($string[$j]==",")
        {
            $Codigo="";
        }
        else
        {
            $Codigo=$Codigo.$string[$j];
        }
        
    }
    return $Codigo;
}

//-------------------------------------------
//            Separar Parte 2
//-------------------------------------------
function Parte2($string)
{
    $aux=0;
    $Codigo="";
    for ($k=0 ; $k < strlen($string) ; $k++)
    {
        if($string[$k]==",")
        {
            if($aux==1)
            {
                return $Codigo;
            }
            $Codigo="";
            $aux++;
            
        }
        else
        {
            $Codigo=$Codigo.$string[$k];
        }
    }
}

//-------------------------------------------------
//            Buscar Codigo de Alumno
//-------------------------------------------------
function BuscarCodigo($ListaGeneral,$CodigoEstudiante)
{
    foreach ($ListaGeneral as $key => $value) {
        if($CodigoEstudiante==$key)
        {
            return true;
        }
    }
    return false;
}

//-------------------------------------------------
//             COMPARAR LISTAS
//-------------------------------------------------
function CompararListas($ListaUniversal,$ListaTutorados)
{

    $ListaAlumnosSinTutor=array();
    foreach ($ListaUniversal as $key => $value) {
        $Valor=BuscarCodigo($ListaTutorados,$key);
        if(!$Valor)
        {
            $ListaAlumnosSinTutor[$key]=$value;
        } 
    }
    return $ListaAlumnosSinTutor;

}

?>
<?php

//Alterar
$text = "php es UN LENGUAJE";
echo strtolower($text); //"php es un lenguaje"
echo strtoupper($text); //"PHP ES UN LENGUAJE"
echo ucfirst($text); //"Php es un lenguaje"
echo lcfirst($text); //"php es un lenguaje"

//reemplazar
$text = "php es UN LENGUAJE";
$slug = str_replace(" ", "-", $text);
echo $slug; //php-es-UN-LENGUAJE

$text = "php es UN LENGUAJE";
$slug2 = str_replace("php", "JavaScript", $text);
echo strtolower($slug2); //"javascript es un lenguaje"

//Modificar
$code = 39;
echo str_pad($code, 8, "#", STR_PAD_BOTH); //"39######"

$title = "<h1>Titulo</h1>";
echo strip_tags($title); //"Titulo"

//Prefijo "mb_" para elementos multibyte
$text = "año 2020, programación";
echo strtoupper($text); //"AñO 2020, PROGRAMACIóN"
echo mb_strtoupper($text); //"AÑO 2020, PROGRAMACIÓN"
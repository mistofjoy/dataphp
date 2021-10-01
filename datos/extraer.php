<?php

//Posiciones en un string
$data = "estudio php";
echo $data[0]; // "e"

//Substraer strings
$post = "Lorem ipsum dolor sit";
$extrac = substr($post, 0, 11);
echo $extrac; //"Lorem ipsum"

//Explode
$techs = "php, JavaScript, Laravel";
$tags = explode(", ", $techs);
echo $tags[0]; //"php"

//var_dump
echo var_dump($tags);
/*
array(3) {
  [0]=>
  string(3) "php"
  [1]=>
  string(10) "JavaScript"
  [2]=>
  string(7) "Laravel"
}
*/

//Implode
$cursos = ["php", "JavaScript", "Laravel"];
$categorias = implode(", ", $cursos);
echo $categorias; //"php, JavaScript, Laravel"

//trim
$courses = "    Curso de php    ";
echo trim($courses); //"Curso de php"
echo ltrim($courses); //"Curso de php    "
echo rtrim($courses); //"    Curso de php"
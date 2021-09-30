<?php
//Comillas simples
echo 'Esto es un texto 
de varias lineas';

$years = 2;
echo 'Federico tiene ' . $years . ' años';

//comillas simples con funciones
function getTeacher() {
    return "teacher";
}

echo getTeacher().' enseña php';

//Backslashes
echo 'La comilla simple \' es una preciosura';


//Comillas dobles
$name = 'Italo';
echo "el nombre del profe es $name";

//Comillas dobles con arrays
$courses = [
    'backend' => [
        'php',
        'laravel',
    ],
];

echo "¿Quieres aprender sobre {$courses['backend'][0]}?";

//Comillas dobles con objetos
Class User {
    public $name = "Italo";
}
$user = new User;

echo "Su nombre es $user->name";

//Comillas dobles con variables variables
$teacher = "italo";
$italo = "profesor de php";
echo "$teacher es un ${$teacher}";

//comillas dobles con funciones y variables variables
function getTeacher2() {
    return "teacher";
}

$teacher = "Italo";

echo "${getTeacher2()} enseña php";

//Comentarios simples
//Hola! Esto es un comentario!

//Comenntarios de varias lineas
/*
Hola!
Esto es un comentario de variass lineas!
Loco verdad?
/*
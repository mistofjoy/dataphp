<?php
//Estructura básica de una función
function greet() {
    echo "Hola";
}

greet(); //"Hola"

//Función con un valor como argumento
function decir($valor) {
    echo $valor;
}

decir("Hola"); //"Hola"

//Función con una variable como argumento
$nombre = "Jhonkar";
$apellido = "Sufia";
function juntar( $nombre, $apellido ) {
    echo $nombre . ' ' . $apellido;
}

juntar( $nombre, $apellido ); //"Jhonkar Sufia"

//Función con una referencia como argumento
$numero = 5;
function cambiar( &$valor ) {
    $valor -= 2;
}

echo $numero; //5
cambiar( $numero );
echo $numero; //3

//Función con un valor predeterminado
$sabor = "de leche";
function dulce( $sabor = "de lechoza" ) {
    echo "Dulce " . $sabor;
}

echo dulce(); //"Dulce de lechoza"
echo dulce($sabor); //"Dulce de leche"

//Funciones como argumento
function sabor() {
    return "chocolate";
}

function bebida($sabor) {
    echo "Bebida de " . $sabor;
}

bebida( sabor() ); //"Bebida de chocolate"
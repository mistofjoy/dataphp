<?php
//Funciones como argumento
function sabor() {
    return "chocolate";
}

function bebida($sabor) {
    echo "Bebida de " . $sabor;
}

bebida( sabor() ); //"Bebida de chocolate"
echo sabor(); //"chocolate"

//return con arrays
function frutas() {
    return [ 'manzanas', 'bananas' ];
}

echo frutas()[0]; //'manzanas'
echo frutas()[1]; //'bananas'
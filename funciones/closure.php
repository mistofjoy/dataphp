<?php
//variables que requieren lógica
$greet = function ($name) {
    return 'Hola ' . $name;
};

echo $greet('Jhonkar');

//Funciones anónimas como argumento
function saludar ( Closure $lang, $name ) {
    return $lang($name);
}

$es = function ($name) {
    return 'Hola '. $name;
};

$en = function ($name) {
    return 'Hello ' . $name;
};

echo saludar( $en, "Jhonkar" ); //"Hello Jhonkar"
echo saludar( $es, "Jhonkar" ); //"Hola Jhonkar"
//Si no colocas una función anónima en el primer argumento, entonces dará error.
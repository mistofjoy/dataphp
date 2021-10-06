<?php
//Array asociativo = con index personalizado
$usuario = array(
    'username'  => 'panchito',
    'real_name' => 'Juan Pablo',
    'email'     => 'JP@panchito.com',
    'password'  => '123456789',
);
var_dump( $usuario );

//Array con index parcialmente personalizado
//Esto es una mala práctica. Dificulta la lectura y el seguimiento
$deportes = array(
    'bola'     => 'Soccer',
    'contacto' => 'Karate',
    'footbal',
    5          => 'basketball',
    'Baseball',
);
var_dump( $deportes );

//Estructura foreach() con $key y $value
$usuario = array(
    'username'  => 'panchito',
    'real_name' => 'Juan Pablo',
    'email'     => 'JP@panchito.com',
    'password'  => '123456789',
);

foreach ( $usuario as $key => $value ) {
    echo "$key: $value, ";
}

//Estructura foreach() solo con $value
$usuario = array(
    'username'  => 'panchito',
    'real_name' => 'Juan Pablo',
    'email'     => 'JP@panchito.com',
    'password'  => '123456789',
);

foreach ( $usuario as $value ) {
    echo "$value, ";
}

//Estructura array_walk() de un solo argumento
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);

function shoutout( $framework ) {
    echo "$framework, "; 
};

array_walk( $frameworks, 'shoutout');

//Estructura array_walk() de dos argumentos
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);

function shoutout2( $framework, $key ) {
    echo "$framework: $key"; 
};

array_walk( $frameworks, 'shoutout2');

//Estructura array_key_exists()
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);
echo array_key_exists( 'php', $frameworks );

//Estructura in_array()
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);
echo in_array( 'django', $frameworks );

//Estructura array_keys()
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);
var_dump( array_keys( $frameworks ) );

//Estructura array_values()
$frameworks = array(
    'php' => 'Laravel',
    'javascript' => 'nodejs',
    'python' => 'django',
);
var_dump( array_values( $frameworks ) );
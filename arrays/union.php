<?php
//suma de arrays con keys numericas
$frontend = array(
    'JavaScript',
);
$backend = array(
    'php',
    'laravel',
);
var_dump( $frontend + $backend );

//suma de arrays con keys literales
$frontend = array(
    'frontend' => 'JavaScript',
);
$backend = array(
    'backend'   => 'php',
    'framework' => 'laravel',
);
var_dump( $frontend + $backend );

//array_merge()
$frontend = array(
    'JavaScript',
);
$backend = array(
    'php',
    'laravel',
);
var_dump( array_merge($frontend, $backend) );

//claves literales repetidas
$frontend = array(
    'a' => 'JavaScript',
);
$backend = array(
    'a' => 'php',
    'b' => 'laravel',
);
var_dump( array_merge($frontend, $backend) );

//array_merge_recursive()
$frontend = array(
    'a' => 'JavaScript',
);
$backend = array(
    'a' => 'php',
    'b' => 'laravel',
);
var_dump( array_merge_recursive($frontend, $backend) );

//array_combine()
$courses = array(
    'JavaScript',
    'php',
    'laravel',
);
$categories = array(
    'front',
    'back',
    'framework',
);
var_dump( array_combine( $categories, $courses ) );
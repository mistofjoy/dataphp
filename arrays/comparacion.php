<?php
//array_diff()
$courses = array(
    'php',
    'JavaScript',
);

$wishes = array(
    'php',
    'laravel',
    'JavaScript',
    'vuejs',
);

var_dump( array_diff( $wishes, $courses ) );
var_dump( array_diff( $courses, $wishes ) );

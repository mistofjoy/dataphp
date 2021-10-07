<?php
//sort()
$courses = array(
    'php',
    'JavaScript',
    'Laravel',
);
sort( $courses );
var_dump( $courses );

//rsort()
$courses = array(
    'php',
    'JavaScript',
    'Laravel',
);
rsort( $courses );
var_dump( $courses );

//ksort()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
ksort( $courses );
var_dump( $courses );

//krsort()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
krsort( $courses );
var_dump( $courses );

//array_slice()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
var_dump( array_slice( $courses, 1 ) );

//array_chunk()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
var_dump( array_chunk( $courses, 2 ) );

//array_shift()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
array_shift( $courses );
var_dump( $courses );

//array_pop()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
array_pop( $courses );
var_dump( $courses );

//array_unshift()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
array_unshift( $courses, 'html', 'css' );
var_dump( $courses );

//array_push()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
array_push( $courses, 'html', 'css' );
var_dump( $courses );

//array_flip()
$courses = array(
    10 => 'php',
    21 => 'JavaScript',
    7  => 'Laravel',
);
var_dump( array_flip( $courses ) );
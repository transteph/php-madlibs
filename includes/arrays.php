<?php
    // noun 
	$noun = array();
	$noun[ 0 ] = 'pickle';
	$noun[ 1 ] = 'chicken noodle soup';
	$noun[ 3 ] = 'helicopter';
	$noun[ 4 ] = 'bubblegum';
    $noun[ 5 ] = 'iPod';
	$noun[ 6 ] = 'booger';
	$noun[ 7 ] = 'cantelope';
    $noun[ 8 ] = 'aardvark';
	$noun[ 9 ] = 'kazoo';
	$noun[ 10 ] = 'banjo';
    // adjective
    $adjective = array();
    $adjective [ 0 ] = 'smelly';
    $adjective [ 1 ] = 'bouncy';
    $adjective [ 2 ] = 'ginormous';
    $adjective [ 3 ] = 'itchy';
    $adjective [ 4 ] = 'sparkly';
    $adjective [ 5 ] = 'fuzzy';
    $adjective [ 6 ] = 'ugly';
    $adjective [ 7 ] = 'fabulous';
    $adjective [ 8 ] = 'sour';
    $adjective [ 9 ] = 'brown';
    $adjective [ 10 ] = 'yellow';
    //past-tense verbs
    $verbs = array();
    $verbs[ 0 ] = 'disco danced';
    $verbs[ 1 ] = 'speed walked';
    $verbs[ 2 ] = 'scratched';
    $verbs[ 3 ] = 'dabbed';
    $verbs[ 4 ] = 'smelled';
    $verbs[ 5 ] = 'square danced';
    $verbs[ 6 ] = 'gyrated';
    $verbs[ 7 ] = 'rolled';
    $verbs[ 8 ] = 'strutted';
    $verbs[ 9 ] = 'frolicked';
    $verbs[ 10 ] = 'ate';
    //present-verbs
    $verb = array();
    $verb[ 0 ] = 'DJ-ing';
    $verb[ 1 ] = 'diaper wrapping';
    $verb[ 2 ] = 'competitive hotdog eating';
    $verb[ 3 ] = 'Mario Karting';
    $verb[ 4 ] = 'farting';
    $verb[ 5 ] = 'butterfly catching';
    // name for characters
    $name = array();
    $name[ 0 ] = 'Bart';
    $name[ 1 ] = 'Hello Kitty';
    $name[ 2 ] = 'Barney';
    $name[ 3 ] = 'Colonel Sanders';
    $name[ 4 ] = 'Brad Pitt';
    $name[ 5 ] = 'Shrek';
    $name[ 6 ] = 'Zeus';
    $name[ 7 ] = 'Thomas Edison';
    $name[ 8 ] = 'Justin Timberlake';
    $name[ 9 ] = 'Big Mac Bobby';
    $name[ 10 ] = 'Obama';

    // array for plural animal
    $animal = array();
    $animal[ 0 ] = 'cats';
    $animal[ 1 ] = 'ants';
    $animal[ 2 ] = 'tigers';
    $animal[ 3 ] = 'ducks';
    
    // place
    $place = array();
    $place[ 0 ] = 'West Virginia';
    $place[ 1 ] = 'The Balkans';
    $place[ 2 ] = 'The Sahara Desert';
    $place[ 3 ] = 'Baskin Robbins';
    
    // surprise pages
    $surprisePages = array();
    $surprisePages[ 0 ] = 'surprise-discovery.php';
    $surprisePages[ 1 ] = 'surprise-champion.php';
    $surprisePages[ 2 ] = 'surprise-baby.php';

    // numbers
    $number = array();
    $number[ 0 ] = '3';
    $number[ 1 ] = '7';

    $today = date("F j, Y");  

    // shuffle each array
    shuffle($noun);
    shuffle($adjective);
    shuffle($verbs);
    shuffle($verb);
    shuffle($name);
    shuffle($animal);
    shuffle($place);
    shuffle($number);
    shuffle($surprisePages);

?>
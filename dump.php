<?php

require __DIR__.'/vendor/autoload.php';

// intiation de varaibles
$number = 123;
$text = "zine bar bas";
$flag = true; 

// inspection de varaibles 
var_dump($number);
var_dump($text);
var_dump($flag);

//inspection de varaibles avec symfony/var-dumper 
dump($number);
dump($text);
dump($flag);


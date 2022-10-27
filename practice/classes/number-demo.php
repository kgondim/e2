<?php 

require 'Number.php' ; 
require 'EvenNumber.php';
require 'Debug.php';

use HES\Number;
use HES\EvenNumber;
use HES\Debug as DebugA; #creates alias as DebugA and reference in code
// use ABC\Debug as DebugB;

$example1=new Number(9);
$example2 = new EvenNumber(20);
 
// var_dump($example1->isValid());
// var_dump($example2->isValid());
//  $example1->test();

// $debug = new Debug();
// $debug->dump('Hello world');

Debug::dump(['a', 'b', ['x', 'y', 'z']]);
<?php
/*
 * test1 : 
 * test2 : 5
 * test3 :5
 */

$x = 5; // Global variable
function test1()
{
	echo __METHOD__ . " : {$x}", PHP_EOL; 
}

function test2()
{
	global $x;
	echo __METHOD__ . " : {$x}", PHP_EOL;	
}

function test3()
{
	echo __MethOD__ . " : {$GLOBALS['x']}", PHP_EOL;
}


test1();
test2();
test3();


?>

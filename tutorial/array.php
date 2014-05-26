<?php

$numArray = array(
	"foo" => "bar",
	"bar" => "hoge",
	1 => 52,
	3 => 22,
);
var_dump($numArray);
echo $numArray, PHP_EOL;
echo 'size : ', count($numArray), PHP_EOL;
echo $numArray['foo'], PHP_EOL;
echo $numArray[1], PHP_EOL;
echo $numArray[3], PHP_EOL;

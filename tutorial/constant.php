<?php

// Print all definition
var_dump(get_defined_constants());

define('TITLE1', 'title1');
const TITLE2 = 'title2';

echo TITLE1, PHP_EOL;
echo TITLE2, PHP_EOL;

$value = 'TITLE2';
echo constant($value), PHP_EOL;


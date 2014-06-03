<?php

$num = 1;
$str = "string";

printf("printf : %d %s" . PHP_EOL, $num, $str);
echo sprintf("echo (sprintf()) : %d %s", $num, $str ), PHP_EOL;

$num = 1000000;
echo number_format($num), PHP_EOL; // 1,000,000
echo number_format($num, 2), PHP_EOL; // 1,000,000.00
echo number_format($num, 3, '^', '&'), PHP_EOL; // 1&000&000^000

$str_length = strlen($str);
echo "strlen($str) $str_length", PHP_EOL;
$jp_str = "あいうえお";
echo strlen($jp_str), PHP_EOL; // 15
echo mb_strlen($jp_str, "UTF-8"), PHP_EOL; // 5




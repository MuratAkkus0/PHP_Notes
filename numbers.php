<?php

$number1 = 12.2;
$number2 = 20;

# Built-in Number Methoads in Php
echo "result: ".($number1 + $number2)."<br>";

echo var_dump(is_int($number2));
echo var_dump(is_int($number1));
echo var_dump(is_float($number1));
# Numeric fonksiyonu string veya number olup olmadigini kontrol etmez onun yerine number a cevirilip cevirilemeyecegini 
# kontrol eder. Yani "a10" icin dönen cevap true olur.
echo var_dump(is_numeric($number2));

echo ceil(4.3)."<br>";
echo ceil(4.7)."<br>";
echo floor(4.7)."<br>";
echo round(4.7)."<br>";
echo round(4.2)."<br>";
echo sqrt(25)."<br>";
echo abs(-25)."<br>";
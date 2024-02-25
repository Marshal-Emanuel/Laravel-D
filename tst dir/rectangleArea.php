<?php

$lengh = $_POST['txtlength'];
$width = $_POST['txtwidth'];

$areat =area($lengh, $width);
echo "The are of the triangle is: " . $areat;

function area(int $num1, int $num2): int {
    return $num1 * $num2;
}
?>
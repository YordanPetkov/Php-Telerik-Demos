<?php
$a = 1;
while ($a < 100) {
    echo $a . " ";
    $a ++;
}
echo "<br />";

do {
    echo $a . " ";
    $a ++;
}while($a < 200);
echo "<br />";

for ($i = 0; $i < 10; $i++){
    echo $i . " ";
}
echo "<br />";

$arr = array (1,1,2,3,5,8);
foreach ($arr as $value)
    echo $value;
echo "<br />";

$arr = array ("one" => 1, "two" => 2);
foreach ($arr as $key => $value){
    echo $key . " => " . $value . "<br />";
}
echo "<br />";


$a = 5;
$b = 6;

if ($a > $b)
    echo "A is greater than B";
elseif ($a == $b)
    echo "A is equal to B";
else 
    echo "B is greater than A";

echo "<br />";


$a = 1;
switch ($a) {
    case 0: 
        echo "A is 0";
        break;
    case 1:
        echo "A is 1";
        break;
    default:
        echo "A is ... sth different";
        break;
}
echo "<br />";

echo ($a > $b) ? $a : $b;
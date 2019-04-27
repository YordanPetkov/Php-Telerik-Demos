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
    echo $key . " => " . $value;
}
echo "<br />";


<?php
$lines = file("text.txt");
foreach($lines as $line_num => $line){
    echo "#$line_num : $line. <br />";
}


if(isset($_GET["name"]) && !empty($_GET["name"])){
    echo "Hello " . $_GET["name"] . "<br />";
}

?>

<a href="index.php?name=gosho">Zdrasti Gosho</a>
<a href="index.php?name=tosho">Zdrasti Tosho</a>
<a href="index.php?name=pesho">Zdrasti Pesho</a>
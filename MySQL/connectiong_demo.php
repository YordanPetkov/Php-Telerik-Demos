<?php
define("DATABASE_NAME", "hr");


$dblink = mysqli_connect ("localhost", "exlogin", "123456");

if($dblink === false) {
    echo "Error connecting server! \n";
}

if(mysqli_select_db($dblink, DATABASE_NAME) === false) {
    echo "Error connecting database .<br />";
}
else {
    echo "Connecting to database successfully .<br />"; 
}

echo "<br />";
$res = mysqli_query ($dblink, "select * from countries limit 0, 5");
if ($res !== false) {
    echo "SQL query executed. ";
    echo "<br />";
    while($row = mysqli_fetch_row($res)){
        foreach($row as $value) {
            echo $value . " ";
        }
        echo "<br / >";
    }
} else {
    echo "SQL query error.";
}
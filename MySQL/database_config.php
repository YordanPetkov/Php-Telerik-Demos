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


mysqli_query($dblink, "SET NAMES UTF8");
<?php 
header('Content-type: text/html; charset=utf-8');
require_once ("database_config.php"); 
$sql = "SELECT * FROM countries";

$res = mysqli_query($dblink, $sql);
$rowsCount = mysqli_num_rows($res);
echo "ROWS : " . $rowsCount;

$sql = "INSERT INTO countries (country_id, country_name, region_id) VALUES ('BG', 'Bulgaria' , '1')";
$res = mysqli_query($dblink, $sql);

mysqli_close($dblink);
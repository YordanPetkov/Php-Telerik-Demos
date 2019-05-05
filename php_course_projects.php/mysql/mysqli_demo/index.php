<?php
$con = mysqli_connect('localhost', 'exlogin', '123456', 'demo_chat');
if(!$con) {
    echo 'no database';
}

mysqli_set_charset($con, 'utf8');
/* 
$sql = 'SELECT * FROM users 
WHERE user_name="'.mysqli_real_escape_string($con, $_GET['name']).'" 
AND user_password="'.mysqli_real_escape_string($con, $_GET['pass']).'"';

echo $sql;
$q = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($q)) {
    echo '<pre>' .print_r($row, true). '</pre>';
} */

//подготвя връзката
$sql = 'SELECT user_name,age FROM users WHERE user_name=? AND user_password=?';

$stmt = mysqli_prepare($con, $sql);
/**
 * types :
 * b = bool
 * i = int
 * s = string
 * d = double
 */
if(!$stmt) {
    echo "ERROR";
    exit;
}
mysqli_stmt_bind_param($stmt, 'ss', $_GET['name'],$_GET['pass']);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user_name, $user_age);
mysqli_stmt_fetch($stmt);
echo $user_name . "--" . $user_age;

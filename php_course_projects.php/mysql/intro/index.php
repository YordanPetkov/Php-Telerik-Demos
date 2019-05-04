<?php
$pageTitle = "MySQL demo";
include 'header.php';
require_once 'functions.php';
?>
<form method="POST" action="">
    <textarea name="txt"></textarea>
    <input type="submit" value="Добави" />
</form>

<?php
$connection = createConnectionWithDB();
//printData($connection);
/* for($i = 1; $i <= 500; $i++) {
    $sql = 'INSERT INTO users (user_name, user_password, age, is_active)
        VALUES ("test'.$i.'","qwerty",'.rand(3,65).','.rand(0,1). ')';
    mysqli_query($connection,$sql);
} */


/* if($_POST) {
    $msg = trim($_POST['txt']) ;
    $msg = mysqli_real_escape_string($connection, $msg);

    $sql = 'INSERT INTO messages (msg_data) VALUES ("' .$msg. '")';
    if(mysqli_query($connection, $sql)) {
        echo "OK";
    }else {
        echo "ERROR";
    }
} */

$query = mysqli_query($connection, 'SELECT * FROM users');
if(!$q) {
    echo "ERROR";
}
echo '<table><tr><td>Username</td></tr>';
while($row = $q->fetch_assoc()) {
    echo '<tr><td>' . $row['user_name'].'</td></tr';
}


include 'footer.php';
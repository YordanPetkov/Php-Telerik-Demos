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


if($_POST) {
    $msg = trim($_POST['txt']) ;
    $msg = mysqli_real_escape_string($connection, $msg);

    $sql = 'INSERT INTO messages (msg_data) VALUES ("' .$msg. '")';
    
    echo mysqli_insert_id($connection);
    if(mysqli_query($connection, $sql)) {
        echo "OK";
    }else {
        echo "ERROR";
    }
}

/* mysqli_query($connection, '
    UPDATE users SET is_active = 1
    WHERE age >= 18 AND age < 24 AND is_active = 0'); */

/*  mysqli_query($connection, '
    DELETE FROM users 
    WHERE age > 60'); */

    mysqli_query($connection, 'INSERT INTO users (user_name)
                VALUES ("test")');
echo mysqli_affected_rows($connection); 

$sql = 'SELECT user_name AS nick,age,is_active 
        FROM users
        WHERE age > 50 AND  is_active = 0 
        ORDER BY age ASC 
        LIMIT 0, 100';
$query = mysqli_query($connection, $sql);

if(!$query) {
    echo "ERROR";
}

if($query->num_rows > 0) {
    echo '<table><tr><td>Username</td><td>Age</td><td>is_active</td></tr>';
    while($row = $query->fetch_assoc()) {
        echo '<tr><td>' . $row['nick'].'</td>
            <td>'.$row['age'].'
            <td>'.$row['is_active'].'</tr>';
    }
    echo "</table>";
}else {
    echo "No results";
}




include 'footer.php';
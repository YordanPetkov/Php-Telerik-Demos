<?php
$title = "Автори";
include './inc/header.php'; 
?>

<a href="index.php">Списък</a>
<a href="add_book.php">Нова книга</a>
<form method='POST' action="authors.php">
    <div>
        <label for="author-name">Име</label>
        <input type="text" name="author_name" id="author-name" />
        <input type="submit" value="Добави" />
    </div>
</form>

<?php
    if(array_key_exists('author_name', $_POST)) {
        $author_name = trim(htmlspecialchars($_POST['author_name']));
        $author_name = mysqli_real_escape_string($db ,$author_name);
        if(mb_strlen($author_name) < 2) {
            echo '<p>Невалидно име</p>';
        }else {
            $sql_checkA = 'SELECT * FROM `authors` WHERE author_name = "'.$author_name.'"';
            $isAuthorExist = mysqli_query($db, $sql_checkA);
            if(mysqli_error($db)){
                echo "Грешка";
            }
            if(mysqli_num_rows($isAuthorExist) > 0) {
                echo "Има такъв автор";
            }else {
                $sql_addA = 'INSERT INTO `authors` (author_name)
                 VALUES ("'.$author_name .'")';
                $query = mysqli_query($db, $sql_addA);
                if(!mysqli_error($db)) {
                    echo "Успешен запис!";
                }else {
                    echo "Неуспешен запис!";
                }
            }
            
        }
    }
?>

<?php
    $authors = getAuthors($db);
    if($authors === false){

    }else {
        echo '<table border=1>
            <tr><th>Автор</th></tr>';
        foreach($authors as $row) {
            echo '<tr><td>' .$row['author_name']. '</td></tr>';
        }
        echo '</table>';
    }
    
?>

<?php
include './inc/footer.php';

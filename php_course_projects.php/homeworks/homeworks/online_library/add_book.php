<?php
$title = "Нова книга";
include './inc/header.php'; 
?>
<a href="index.php">Списък</a>
<a href="authors.php">Автори</a>
<form method='POST' action="add_book.php">
    <div>
        <label for="book-name">Име</label>
        <input type="text" name="book_name" id="book-name" />
    </div>
    <?php 
        $authors = getAuthors($db);
        if($authors === false) {
            echo 'Грешка';
        }
    ?>
    <div>
        <label for="authors">Автори</label>
        <select name="authors[]" id="authors" multiple>
            <?php
                
                foreach($authors as $row) {
                    echo '<option value="'.$row['author_id'].'"
                    >'.$row['author_name'].'</option>';
                }
                
            ?>
        </select>
    </div>
    
    <input type="submit" value="Добави" />
</form>


<?php
    if(array_key_exists('book_name',$_POST) 
    && array_key_exists('authors', $_POST)){
        $book_name = trim($_POST['book_name']);
        $book_name = mysqli_real_escape_string($db ,$book_name);
        $authors = $_POST['authors'];
        $errors = [];
        if(mb_strlen($book_name) < 2) {
            $errors[] = '<p>Невалидно име</p>';
        }
        if(!is_array($authors) || count($authors) == 0) {
            $errors[] = '<p>Невалидни данни</p>';
        }

        foreach ($authors as $aut) {
            if(!isAuthorIdExists($db, $aut)) {
                $er[] = '<p>Невалиден автор </p>';
                break;
            }
        }

        $sql = 'SELECT * FROM `books` WHERE book_title = "'.$book_name.'"';
        $q = mysqli_query($db, $sql);
        if(mysqli_error($db)) {
            $errors[] = '<p>Грешка</p>';
        }
        if(mysqli_num_rows($q) > 0) {
            $errors[] = '<p>Има книга със същото име.</p>';
        }
        

        if(count($errors) > 0) {
            foreach($errors as $er) {
                echo $er;
            }
        }else {
            $sql = 'INSERT INTO books (book_title)
             VALUES ("'.mysqli_real_escape_string($db, $book_name).'")';

            $q = mysqli_query($db, $sql);
            if(mysqli_error($db)) {
                echo "Грешка";
            }else {
                $book_id = mysqli_insert_id($db);
                foreach ($authors as $author_id) {
                    mysqli_query($db, 'INSERT INTO books_authors (book_id,author_id)
                    VALUES ('.$book_id.','.$author_id.')');
                    if(mysqli_error($db)){
                        echo "Грешка";
                        exit;
                    }
                }
                echo "Книгата е добавена.";
            }

        }

    }
    
?>
<?php
include './inc/footer.php';

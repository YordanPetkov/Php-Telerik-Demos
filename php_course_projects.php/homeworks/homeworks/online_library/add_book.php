<?php
$title = "Нова книга";
include './inc/header.php'; 
?>
<a href="index.php">Списък</a>
<a href="add_book.php">Нова книга</a>
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
        $authors = $_POST['authors'];
        $errors = [];
        if(mb_strlen($book_name) < 2) {
            $errors[] = '<p>Невалидно име</p>';
        }
        if(!is_array($authors) || count($authors) == 0) {
            $errors[] = '<p>Невалидни автори</p>';
        }
        if(count($errors) > 0) {
            foreach($errors as $er) {
                echo $er;
            }
        }else {
            
        }

    }
    
?>
<?php
include './inc/footer.php';

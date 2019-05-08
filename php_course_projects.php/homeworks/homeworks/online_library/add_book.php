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

?>
<?php
include './inc/footer.php';

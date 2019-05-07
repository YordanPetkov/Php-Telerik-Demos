<?php
$title = "Автори";
include './inc/header.php'; 
?>


<a href="index.php">Списък</a>
<form method='POST' action="authors.php">
    <div>
        <label for="author-name">Име</label>
        <input type="text" name="author_name" id="author-name" />
        <input type="submit" value="Добави" />
    </div>
</form>
<?php
    if($_POST) {
        $author_name = trim($_POST['author_name']);
        if(mb_strlen($author_name) < 2) {
            echo '<p>Невалидно име</p>';
        }


    }
?>




<?php
include './inc/footer.php';

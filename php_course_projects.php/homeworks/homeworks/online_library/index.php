<?php
$title = "Списък";
include './inc/header.php'; 
?>
<a href="authors.php">Автори</a>
<a href="add_book.php">Нова книга</a>
<?php
    $sql = 'SELECT * FROM books as b 
    INNER JOIN books_authors as ba
    ON b.book_id = ba.book_id
    INNER JOIN authors as a
    ON a.author_id = ba.author_id';
    $q = mysqli_query($db, $sql);

    echo '<table border=1><tr><td>Книга</td><td>Автори</td></tr>';
    while ($row = mysqli_fetch_assoc($q)) {
        echo '<tr><td>'.$row['book_title'].'</td>
        <td>'.$row['author_name'].'</td></tr>';
    }
    echo '</table>';
?>
<?php
include './inc/footer.php';


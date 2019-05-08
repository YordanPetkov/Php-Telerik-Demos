<?php
$title = "Списък";
include './inc/header.php'; 
?>
<a href="index.php">Всички книги</a>
<a href="authors.php">Автори</a>
<a href="add_book.php">Нова книга</a>
<?php
    if(isset($_GET['author_id'])){
        $author_id = (int)$_GET['author_id'];
        $sql = 'SELECT * FROM books_authors as ba
        INNER JOIN books as b
        ON ba.book_id = b.book_id
        INNER JOIN books_authors as ba2
        ON ba2.book_id = ba.book_id
        INNER JOIN authors as a
        ON ba2.author_id = a.author_id
        WHERE ba.author_id=' . $author_id;
    }else {
        $sql = 'SELECT * FROM books as b 
        INNER JOIN books_authors as ba
        ON b.book_id = ba.book_id
        INNER JOIN authors as a
        ON a.author_id = ba.author_id';
    }
    $q = mysqli_query($db, $sql);
    $result = [];
    while ($row = mysqli_fetch_assoc($q)) {
        $result[$row['book_id']]['book_title'] = $row['book_title'];
        $result[$row['book_id']]['authors'][$row['author_id']] =$row['author_name'];
    }

    echo '<table border=1><tr><td>Книга</td><td>Автори</td></tr>';
    foreach($result as $row) {
        echo '<tr><td>'.$row['book_title'].'</td>
        <td>';
        $authorsResult = [];
        foreach($row['authors'] as $key_author_id => $vAuthors){
            $authorsResult[] = '<a href="index.php?author_id='.$key_author_id.'
            ">' . $vAuthors . '</a>';
        }

        echo implode(' , ', $authorsResult) . '</td></tr>';
    }
    echo '</table>';
?>
<?php
include './inc/footer.php';


<h1>Welcome</h1>
<ul>
<?php
foreach($data['books'] as $v) {
    echo '<li>' . $v['book_title'].'</li>';
}
?>
</ul>
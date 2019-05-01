<?php
mb_internal_encoding('UTF-8');
$pageTitle = "Списък";
include "header.php";



?>
<div>
    <a href="index.php">Списък</a>
</div>

<form method="POST">
    <div>
        <label for="cost-name">Име</label>
        <input type="text" name="name" id="cost-name" />
    </div>
    <div>
        <label for="cost-price">Сума</label>
        <input type="text" name="price" id="cost-price" />
    </div>
    <div>
        <label for="cost-type">Вид</label>
        <select>
            <?php
                foreach ($types as $key => $value){
                    echo '<option value='.$key.'>'.$value.'</option>';
                }
            ?>
        </select>
    </div>
    <input type="submit" value="Добави" />
</form>

<?php
include "footer.php";
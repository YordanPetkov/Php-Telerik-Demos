<?php
mb_internal_encoding('UTF-8');
$pageTitle = "Списък";
require "header.php";



?>
<div>
    <a href="index.php">Списък</a>
</div>

<form method="POST">
    <div>
        <label for="cost-date">Дата</label>
        <input type="date" name="date" id="cost-date" placeholder="00-00-0000" />
    </div>
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
        <select name="type">
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
$error = false;

if($_POST){
    $patt = "/[^0-9(.{1})]/";

    $date = trim($_POST['date']);
    $date = str_replace('!','',$date);

    $name = trim($_POST['name']);
    $name = str_replace('!','',$name);

    $price = trim($_POST['price']);
    $price = str_replace('!','',$price);

    $indexOfType = trim((int)$_POST['type']);
    $indexOfType = str_replace('!','',$indexOfType);

    if(mb_strlen($date) == 0){
        $date = date_create("now")->format('Y-m-d');
    }
    if(mb_strlen($name) < 4){
        echo "Името е твърде късо.";
        $error = true;
    }
    if((float)$price < 0 || !is_numeric($price)){
        echo "Невалидна цена.";
        $error = true;
    }
    if(!key_exists($indexOfType,$types)){
        echo "Невалиден вид.";
        $error = true;
    } 

    if(!$error) {
        $result = $date . "!" . $name . "!" . $price . "!" . $types[$indexOfType] . PHP_EOL;
        file_put_contents('data.txt', $result, FILE_APPEND);
    }
}

include "footer.php";
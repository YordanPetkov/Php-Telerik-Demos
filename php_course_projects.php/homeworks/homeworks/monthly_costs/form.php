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
    $name = trim($_POST['name']);
    $name = str_replace('!','',$name);
    $price = trim($_POST['price']);
    $price = str_replace('!','',$price);
    $indexOfType = trim((int)$_POST['type']);
    $indexOfType = str_replace('!','',$indexOfType);
    if(mb_strlen($name) < 3){
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
        $result = $name . "!" . $price . "!" . $types[$indexOfType] . PHP_EOL;
        file_put_contents('data.txt', $result, FILE_APPEND);
    }
}

include "footer.php";
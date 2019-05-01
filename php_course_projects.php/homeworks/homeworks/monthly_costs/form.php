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
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = (int)$_POST['type'];
    if(mb_strlen($name) < 3){
        echo "Името е твърде късо.";
        $error = true;
    }
    if((float)$price < 0 || !is_numeric($price)){
        echo "Невалидна цена.";
        $error = true;
    }
    if(!key_exists($type,$types)){
        echo "Невалиден вид.";
        $error = true;
    } 

    if(!$error) {
        $result = $name . "!" . $price . "!" . $type . PHP_EOL;
        file_put_contents('data.txt', $result, FILE_APPEND);
    }
}

include "footer.php";
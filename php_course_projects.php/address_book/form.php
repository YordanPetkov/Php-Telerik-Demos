<?php
    mb_internal_encoding('UTF-8');
    echo "<pre>";
    echo print_r($_POST);
    echo "</pre>";
    $pageTitle = "Форма";
    include 'includes/header.php';
    $groups = [
        1=>'Приятели',
        2=>'Бивши',
        3=>'Бъдещи',
        4=>'Колеги',
        5=>'Семейство'
    ];
    if($_POST){
        $username = trim($_POST['username']);
        $phone = trim($_POST['phone']);
        $selectedGroup = (int)$_POST['group'];
        $error = false;

        if(mb_strlen($username) < 4) {
            echo "<p>Името е прекалено късо.</p>";
            $error = true;
        }

        if(mb_strlen($phone) < 6 || mb_strlen($phone) > 12) {
            echo "<p>Невалиден телефон.</p>";
            $error = true;
        }

        if(!array_key_exists($selectedGroup,$groups)) {
            echo "<p>Невалидна група.</p>";
            $error = true;
        }

        if(!$error){
            $result = $username . ' ' . $phone . ' ' . $groups;
            file_put_contents('data.txt', $result);
        }

    }
    
?>
    <a href="index.php">Списък</a>

    <form method="POST">
        <div>Име: <input type="text" name="username" /></div>
        <div>Телефон: <input type="text" name="phone" /></div>
        <div>
            <select name="group">
                <?php
                    foreach ($groups as $key=>$value) {
                        echo '<option value="' .$key. '">' . $value . '</option>';
                    }
                ?>
            </select>
        </div>
        <div><input type="submit" value="Добави" /> </div>
    </form>

<?php
    include 'includes/footer.php';
?>


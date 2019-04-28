

<?php
    $lines = file("text.txt");
    foreach($lines as $line_num => $line){
        echo "#$line_num : $line. <br />";
    }


    if(isset($_GET["name"]) && !empty($_GET["name"])){
        echo "Hello " . $_GET["name"] . "<br />";
    }

?>

<a href="index.php?name=gosho">Zdrasti Gosho</a>
<a href="index.php?name=tosho">Zdrasti Tosho</a>
<a href="index.php?name=pesho">Zdrasti Pesho</a>

<?php

    echo "<br />";
    if(isset($_POST["name"]) && !empty($_POST["name"])
        && isset($_POST["pass"]) && !empty($_POST["pass"])){
        echo "Wellcome " . $_POST["name"] . "<br />";
        echo "Your password is : " . $_POST["pass"];
        echo $_POST["questionId"];
    } else {

?>

        <form method="post" action="">
            Username : <input type="text" name="name" /><br />
            Password : <input type="password" name="pass" /><br />
            <input type="hidden" name="questionId" value="1" />
            <input type="button" name="deleteSth" value="delete" />
            <input type="submit" value="Login" />
        </form>

        <form method="post" action="">
        <?php
            $inputs = 5;
            for($i = 0; $i < $inputs; $i++){
                ?>
                <input type="text" name="names[]" /><br />
                <?php
            }
        ?>
            <input type="submit" value="Login" />
        </form>

<?php
    }
?>
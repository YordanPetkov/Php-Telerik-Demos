<!DOCTYPE html>
<html>
    <head>
        <title>Hello php world</title>

    </head>
    <body>
        Standart HTML content followed by php.
        <br />
            <?php 
            $arr = array("rado" => 4123, "gosho" => 131, "tosho" => 3512);
            echo "<pre>";
            var_dump($arr);
            echo "</pre>";

            echo "<br />";
            foreach($arr as $value){
                echo $value . "<br />";
            }
            echo "<br />";
            foreach($arr as $key => $value){
                echo $key . ":" . $value . "<br />";
            }
        ?>
    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello php world</title>

    </head>
    <body>
        Standart HTML content followed by php.
        <br />
            <?php 
            $arr = array(1, 2, 3, "rado" => 4123, "gosho" => 131, "tosho" => 3512);
            echo "<pre>";
            var_dump($arr);
            echo "</pre>";

            echo "<br />";
            echo "Firts value is : $arr[0]";
            echo "<br />";
            foreach($arr as $value){
                echo $value . "<br />";
            }
            echo "<br />";
            foreach($arr as $key => $value){
                echo $key . ":" . $value . "<br />";
            }
            echo "<br />";
            //Constants
            define ('PI', 3.14);
            print PI;
            echo "<br />";

            echo "<strong>DIRECTORY_SEPARATOR: </strong>" . DIRECTORY_SEPARATOR;
            echo "<br />";
            echo "<strong>__FILE__: </strong>" . __FILE__;
            echo "<br />";
            echo "<strong>__LINE__: </strong>" . __LINE__;
            echo "<br />";
            echo "<strong>PHP_VERSION: </strong>" . PHP_VERSION;
            echo "<br />";
            echo "<strong>PHP_OS: </strong>" . PHP_OS;
            echo "<br />";
            echo "<strong>Server variables: </strong>";
            echo "<br />";


            echo "<br />";
            $str1 = 'test';
            $test = 'abc';
            echo $$str1;
            echo "<br />";
            var_dump($_SERVER);
            var_dump($_GET);

/*
            echo "<strong>Document root : </strong>" . $_SERVER['DOCUMENT_ROOT'];
            echo "<br />";
            echo "<strong>SERVER_ADDRESS : </strong>"  . $_SERVER['SERVER_ADDRESS'];
            echo "<br />";
            echo "<strong>REMOTE_ADDRESS : </strong>"  . $_SERVER['REMOTE_ADDRESS'];
            echo "<br />";
            echo "<strong> : </strong>"  . $_SERVER['_GET'];
            echo "<br />";
*/

        ?>
    </body>

</html>
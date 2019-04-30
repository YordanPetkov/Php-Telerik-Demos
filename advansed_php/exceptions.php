<?php
function errorHandler ($errno, $errstr, $errfile, $errline) {
    throw new Exception($errstr, $errno);
}

set_error_handler("errorHandler");

try {
    $i = 1/0;
    echo "You just divided by zero";
} catch (Exception $e) {
    echo "You cannot divide by zero!";
}


try {
    if(!$_POST['name'])
        throw new Exception('No name  supplied', 1001);
    if(!$_POST['email'])
        throw new Exception('No email supplied', 1002);
} catch (Exception $e) {
    $code = $e->getCode();
    if($code > 1000  && $code < 1003) {
        echo "Please fill in all the data";
    }
    else {
        throw $e;
    }
}


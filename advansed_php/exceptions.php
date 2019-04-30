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
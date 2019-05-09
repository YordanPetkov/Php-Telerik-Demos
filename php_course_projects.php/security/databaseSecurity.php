<?php
$pass = "qwerty";
$pass2 = 'qwertY';
echo md5($pass);
echo '<br />';
echo md5($pass2);
echo '<br />';
echo sha1($pass);
echo '<br />';
echo sha1($pass2);
echo '<br />';
echo md5('d8578edf8458ce06fbc5bb76a58c5ca4');
echo '<br />';
echo md5('897c8fde25c5cc5270cda61425eed3c8');
<?php
session_name("mysecuresession");
session_set_cookie_params(3600, '/', 'localhost', false, true);
session_start();
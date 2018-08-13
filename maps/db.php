<?php
$con = mysqli_connect('localhost', 'root', '', 'sumur_bor');  //penghubung database (tempatnya, usernamenya, passwordnya, nama database yg disimpan)

if (!$con) {												 //untuk mengetahui error misalnya nama databasenya
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING|E_ALL));	//untuk mematikan error


?>
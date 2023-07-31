<?php
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME','books_DB');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);*/
$conn = mysqli_connect('localhost', 'root', '', 'books');

if(!$conn){
    die("Failed to Connect :".mysqli_connect_error());
}else{
    // echo "Connect";
};




?>
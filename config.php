<?php
session_start();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB_NAME', 'sigt2');

$conn = new mysqli(HOST, USER, PASS, DB_NAME);

function alert($msg=''){
  echo "<script>alert('$msg')</script>";
}

<?php
$server = "localhost";
$cuser = "sure";
$cpass = "tintin123";
$db = "sure_schooldb";

$conn = mysql_connect($server, $cuser, $cpass);
$myq = mysql_select_db($db);
mysql_query($db, $conn);


$table1 = "users";



$query = "mysql_query";
$fetch = "mysql_fetch_array";
$querynum = "mysql_num_rows";

$admissionno = $_POST['admissionno'];
$cardno = $_POST['cardno'];

?>
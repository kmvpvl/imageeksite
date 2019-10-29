<?php
$dbname = 'imageek';
$conn = mysql_connect('localhost','imageeku','2kq2fOKx');
if (!$conn) die('DB Server is not available: '. mysql_error());
$db = mysql_select_db($dbname, $conn);
if (!$db) die('DB sh is not available: ' . mysql_error());
mysql_set_charset( 'utf-8' );
mysql_query("set names utf8"); 
?>
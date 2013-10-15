<?php
 $host = 'localhost';
 $uname = 'root';
 $pass = '';
 $dbname = 'project_feed';
 $con = mysql_connect($host,$uname,$pass) or die(mysql_error());
 mysql_select_db($dbname);
 ?>
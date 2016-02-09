<?php
include("define.php");
$connection=mysql_connect(DB_SERVER, DB_USERNAME, DB_PASS) or die("Nije moguce povezivanje sa SQL");
$database=mysql_select_db(DB_NAME, $connection);
?>
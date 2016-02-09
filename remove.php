<?php
include("includes/connect.php");
$id=$_GET['id'];

$query="delete from korisnici where id='$id'";

print $query;


mysql_query($query);

header('Location: admin.php');




?>
<?php
include("functions.php");
session_start();

if(isset($_POST)){
	$ime = $_POST["korisnik"];
	$pass= $_POST["pass"];
	
	$query_pass="select password from korisnici where ime='$ime'";
	$permisija="select admin from korisnici where ime='$ime'";
	$query_id="select id from korisnici where ime='$ime'";
	
	$rez_id=mysql_query($query_id);
	$arr_id=mysql_fetch_assoc($rez_id);
	$rez_pass=mysql_query($query_pass);
	$result=mysql_fetch_assoc($rez_pass);
    $ctrl=mysql_query($permisija);
	$ctr=mysql_fetch_assoc($ctrl);
	
	//print_r ($ctr);
	//getUsers($ime, $pass);
	
	$pass=md5($pass);
	
	if($pass==$result["password"]){
		$_SESSION['ime']=$ime;
		$_SESSION['id']=$arr_id['id'];
	    include_once("includes/redirect.php");}
    else $ctr['admin']=0; {include_once("includes/redirect.php");}
     
	/*if(isset($_POST["korisnik"]) and isset($_POST["pass"])){
		if($_POST["korisnik"]=="admin") $ctrl=1;
		else $ctrl=0;
		require_once("includes/redirect.php");}*/
}

?>
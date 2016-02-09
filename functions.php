<?php
include("includes/connect.php");

function getUsers($name, $password){
	
	$query="select * from korisnici";
	$rez=mysql_query($query);
	while($data=mysql_fetch_array($rez)){
		if($name==$data["ime"]) echo $data["ime"]." ".$data["korisnicko_ime"]."<br>"; }}

		
		
		#brisanje korisnika#		

$id=$_GET['id'];

$query="delete from korisnici where id='$id'";

print $query;


mysql_query($query);

header('Location: admin.php');

###########brisanje###############################



function print_korisnici_admin(){
	$query="select id,ime,korisnicko_ime, admin from korisnici where admin=1";
	$query_exe=mysql_query($query);
	echo"<table>";
	echo "<tr ><th class='brd'>id</th><th class='brd'>ime</th><th class='brd'>korisnicko_ime</th><th class='brd'>admin</th><th class='brd'>A/R</th><th>Promijeni</th></tr>";
	while($red=mysql_fetch_assoc($query_exe)){
		echo '<tr>';
		foreach($red as $pom){
			
			echo '<th>'.$pom.'</th>';
		}
	echo "<th><a href='remove.php?id={$red['id']}' onclick=\"return confirm('Delete this user?')\">Izbrisi</th>";
	echo "<th><a href='edit.php?id={$red['id']}' onclick=\"return confirm('Delete this user?')\">Promijeni</th>";
		echo '<br></tr>';
	}
    echo "</table>";
	
}
	
	
	
	
	
?>
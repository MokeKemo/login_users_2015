<?php
include_once("includes/zaglavlje.php");
include_once("includes/connect.php");


session_start();

if(isset($_SESSION['id'])){
	$id=$_SESSION['id'];
	$ime=$_SESSION['ime'];
}
else {
	header('Location: login.php ');
	die();
}

?>
<h1>JA SAM ADMIN</h1>

<form class="form2" method="post" action="pretraga.php">
<input class="pretraga" type="search" name="search" maxlength="20" placeholder="Pretraga"/>
<select name="izbor" class="dugme2" style="width:10%">
<option value="administrator">Administratori</option>
<option value="korisnik">Korisnici</option>
<option value="svi">Svi</option>
</select> 
<input class="dugme2" type="submit" value="Pretraga" name="pretraga"/>
<a href="register.php"><input class="dugme2" type="button" value="Dodaj korisnika" style="width:7%"/></a>
<a href="register_admin.php"><input class="dugme2" type="button" value="Dodaj administratora" style="width:8%"/></a>

</form>
<hr>




<?php


$search=$_POST['search'];
	//$izbor=$_POST['izbor'];
	
	
	if(empty($search)){                       //globalni pocetak uslova da li je prazan searchbox!!!
		if($_POST['izbor']=='administrator'){       //izbor ADMINISTRATOR u padajucem meniju
		
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
		} //kraj ispisa administratora
		
	if($_POST['izbor']=='korisnik'){                                                 //izbor KORISNIK u meniju
		$query="select id,ime,korisnicko_ime, admin from korisnici where admin=-1";
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
	}       //kraj ispisa korisnika
	
	if($_POST['izbor']=='svi'){
		header('Location: admin.php');
	}

	
	
	
	}
	
	else{
		if($_POST['izbor']=='administrator'){
		$query="select id,ime,korisnicko_ime, admin from korisnici where ime like '%$search%' and admin=1";
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
		
	    if($_POST['izbor']=='korisnik'){
			$query="select id,ime,korisnicko_ime, admin from korisnici where ime like '%$search%' and admin=-1";
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
	
	if($_POST['izbor']=='svi'){
		$query="select id,ime,korisnicko_ime, admin from korisnici where ime like '%$search%'";
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
	
	}
	
?>
	
	<form action='logout.php' style='margin-top:2%'>
<input class="dugme2"  type="submit" value="Izloguj se" />
</form>

<hr>
	
	<?php
	
	

include_once("includes/footer.php");
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
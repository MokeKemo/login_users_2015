<?php
include("includes/zaglavlje.php");
require("includes/connect.php");
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
<h1>JA SAM KORISNIK<h1>

<form class="form2" method="post">
<input class="pretraga" type="search" maxlength="20" placeholder="Pretraga">
<select class="dugme2" style="width:10%">
<option value="administrator">Administratori</option>
<option value="korisnik">Korisnici</option>
<option value="svi">Svi</option>
</select> 
<input class="dugme2" type="submit" value="Pretraga" name="pretraga">
</form>

<?php

    $query="select id,ime,korisnicko_ime,admin from korisnici";
	$query_exe=mysql_query($query);
	echo"<table>";
	echo "<tr ><th class='brd'>id</th><th class='brd'>ime</th><th class='brd'>korisnicko_ime</th><th class='brd'>admin</th></tr>";
	while($red=mysql_fetch_assoc($query_exe)){
		echo '<tr>';
		foreach($red as $pom){
			//if(!$red['password']){
			echo '<th>'.$pom.'</th>';
		}
		
		echo '<br></tr>';
	}
    echo "</table>";

?>






<form action='logout.php' style='margin-top:2%'>
<input class="dugme2" type="submit" value="Izloguj se" />
</form>



<?php 
include("includes/footer.php");
?>

</body>

</html>
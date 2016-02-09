<?php
include("includes/zaglavlje.php");
require("includes/connect.php");

?>

<?php
    $id=$_GET['id'];
    $query="select ime, korisnicko_ime from korisnici where id='$id' limit 1";
    $rez=mysql_query($query);
    $arr_rez=mysql_fetch_assoc($rez);	
	$ime=$arr_rez['ime'];
	$korisnik=$arr_rez['korisnicko_ime'];
?>


<form class="forma" method="post">
<center>
<h2>Ime:<h2><div class="klasa"><input style="width: 400px; height:50px; border-radius: 7px " type="text" name="korisnik" value="<?php echo $ime;?>" required></div><br>
<h2>Korisnicko ime:</h2><div class="klasa"><input style="width: 400px; height:50px; border-radius: 7px " type="text" name="kime" value="<?php echo $korisnik;?>" required></div><br>
<div class="klasa"><input class="dugme" name="submit" type="submit" value="Sacuvaj"></div>



</center>
</form>
</center>

<?php

if(!empty($_POST['korisnik'])){$ime=$_POST['korisnik'];
$ime_k=$_POST['kime'];}
$id=$_GET['id'];
    if(isset($_POST['submit'])){
		$upit="update korisnici set ime='$ime' where id='$id'";
		$upit2="update korisnici set korisnicko_ime='$ime_k' where id='$id'";
		mysql_query($upit);
		mysql_query($upit2);
		header('Location: admin.php');
	}

    
?>
<center>
<form  action='logout.php' style='margin:5%'>
<input class="dugme2" type="submit" value="Izloguj se" /><br><br>
<a href="admin.php"><input class="dugme2" type="button" value="Nazad na profil" style="width:7%"/></a>
</form>
</center>
<?php 
include("includes/footer.php");
?>

</body>

</html>
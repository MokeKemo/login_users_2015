<?php
include('includes/zaglavlje.php');
include('includes/connect.php');
?>

<form class="forma" method="post" style="width:40%; height:120%">
<center>
<h2>Ime:<h2><div class="klasa"><input style="width: 400%; height:50%; border-radius: 7px; background-color:#F5D0A9; " type="text" name="name" required></div><br>
<h2>Korisnicko ime:<h2><div class="klasa"><input style="width: 400%; height:50%; border-radius: 7px; background-color:#F5D0A9; " type="text" name="korisnik" required></div><br>
<h2>Lozinka:</h2><div class="klasa"><input style="width: 400%; height:50%; border-radius: 7px; background-color:#F5D0A9; " type="password" name="pass" required></div><br>
<div class="klasa"><input class="dugme" type="submit" value="REGISTRACIJA"></div>



</center>
</form>
<a href="admin.php"><input class="dugme2" type="button" value="Nazad na profil" style="width:7%"/></a>
</center>

<?php

     if(!empty($_POST['name'])&&!empty($_POST['korisnik'])&&!empty($_POST['pass'])){$ime=$_POST['name'];
	 $korisnik=$_POST['korisnik'];
	 $pass=$_POST['pass'];}
	 if(isset($ime)){
	 $query_add="insert into korisnici(ime, korisnicko_ime, password, admin) values('$ime','$korisnik',md5('$pass'), -1)";
	 mysql_query($query_add);
	 header('Location: admin.php');}
	
	 
	 

?>


<script type="text/javascript">

    $("document").ready(function(){
		$(".forma").hide();
	});
	
	$("document").ready(function(){
		$(".forma").fadeIn(3000);
	});





</script>














<?php

include('includes/footer.php');

?>
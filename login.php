<?php
include("includes/zaglavlje.php");
require("includes/connect.php");
?>
<hr>
<div class="hhh"><div style="margin-top:25%"><h2>Unesite svoje podatke!<h2></div></div>
<hr>
<div id="jq">
<form class="forma" method="post" action="provjera.php">
<center>
<h2>Korisnicko ime:<h2><div class="klasa"><input style="width: 400%; height:50px; border-radius: 7px; background-color:#F5D0A9;  " type="text" name="korisnik" required></div><br>
<h2>Lozinka:</h2><div class="klasa"><input style="width: 400%; height:50px; border-radius: 7px; background-color:#F5D0A9; " type="password" name="pass" required></div><br>
<div class="klasa"><input class="dugme" type="submit" value="Uloguj se"></div>
<p><a href="register.php">Registruj se</a></p>

</center>
</form> </div>
</center>

<hr>



<script type="text/javascript">

    $("document").ready(function(){
		$(".hhh").hide();
	});
	
	$("document").ready(function(){
		$(".hhh").slideDown(1000);
	});

	$("document").ready(function(){
		$(".forma").hide();
	});
	
	$("document").ready(function(){
		$(".forma").fadeIn(2000);
	});
	
	$("document").ready(function(){
		$(".klasa").hide();
	});
	
	$("document").ready(function(){
		$(".klasa").fadeIn(2800);
	});
 
</script>



<?php 
include("includes/footer.php");
?>

</body>

</html>

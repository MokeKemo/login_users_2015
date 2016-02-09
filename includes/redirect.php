<?php
if($ctr['admin']==1){ header('Location: admin.php');}
else if($ctr['admin']==-1)   {   header('Location: korisnik.php');}
else header('Location: login.php');
?>
<?php
$id_admin=$_POST['rut'];

//$id_admin="Edgardo Pablo";
$_SESSION['id_admin']=$id_admin;


header("Location:welcomeAdmin.php");

?>
<?php
session_start();
error_reporting(0);
$session=$_SESSION['id_admin'];

if ($session == null || $session=''){
echo "Usted no está autorizado";
die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Log de Bitacora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
    include 'conexion.php';
    /*$server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";*/
    

    $conexion= mysqli_connect($server,$user,$password,$bd)
    or die("error de conexion");
?>
<div class="container">
    <table border="1" >
		<tr class="bg-light">
            <td>Id Bitacora</td>
			<td>Id Admin</td>
			<td>Fecha</td>
            <td>Ejecutor</td>
			<td>Actividad Realizada</td>
			<td>Anformacion Actual</td>
			<td>Informacion Anterior</td>	
		</tr>

		<?php 
		$sql="SELECT * from bitacora";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_bitacora'] ?></td>
			<td><?php echo $mostrar['id_admin'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['ejecutor'] ?></td>
			<td><?php echo $mostrar['actividad_realizada']?></td>
            <td><?php echo $mostrar['informacion_actual']?></td>
            <td><?php echo $mostrar['informacion_anterior']?></td>
            
		</tr>
	<?php 
	}
	 ?>
	</table>
    <table border="1" >
        <div class="row p-5">
            <div class="col-lg-4 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12"><button type="button" class="btn btn-dark"><a href="http://localhost/admin_2-0/welcomeAdmin.php">Regresar al matenedor</a></button></div>
            <div class="col-lg-4 col-sm-12"></div>
        </div>
    </table>
    </div>

	

</body>
</html>
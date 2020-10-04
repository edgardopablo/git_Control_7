<?php

    $rut = $_POST['rut'];

    echo "Rut ingresado :".$rut."\n <br><br>";
    
    $server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";

    $conexion= mysqli_connect($server,$user,$password,$bd)
    or die("error de conexion");
    //echo "conexion ok";
    
    $check=mysqli_query($conexion,"select * from administrador where `rut`='$rut' ");
    $checkrows=mysqli_num_rows($check);

    if($checkrows>0) {
    $rut = $_POST['rut'];
    echo "este es el rut eliminado:  <br>". $rut;
    
    //echo "$nombre";
        
    mysqli_query($conexion,"DELETE from `administrador` where `rut`='$rut'") or die("fallo registro");
  
   } else {  
    echo "Id Usuario no existe en nuestra base";
      mysqli_close($conexion);
    } 
  

    


?>


<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<div clas="container">
    <div class="row">
        <div class="col-lg-12 p-5">
        <button type="button" class="btn btn-light"><a href="http://localhost/admin_2-0/welcomeAdmin.php">volver</a></button>
        </div>
    </div>
</div>
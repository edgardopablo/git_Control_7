<?php
    $id_admin = $_POST['id_admin'];
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $pass= $_POST['pass'];
    //$password = password_hash($password, PASSWORD_DEFAULT);
    $gerencia = $_POST['gerencia'];

    echo "ID Ingresado  :".$id_admin."\n <br><br>";
    echo "ID Ingresado  :".$nombre."\n <br><br>";
    echo "Rut ingresado :".$rut."\n <br><br>";
    echo "Password :".$pass."\n <br><br>";
    echo "Gerencia Selecionada :".$gerencia."\n <br><br></p>";
    
    $server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";

    $conexion= mysqli_connect($server,$user,$password,$bd)
    or die("error de conexion");
    //echo "conexion ok";
    
    $check=mysqli_query($conexion,"select * from administrador where rut='$rut' ");
    $checkrows=mysqli_num_rows($check);

    if($checkrows>0) {
        /*$query="UPDATE `administrador` SET id_admin='$id_admin',nombre='$nombre',rut='$rut',password='$password',
        gerencia='$gerencia' where rut='$rut'";*/
        
        $query="UPDATE `administrador` SET `id_admin`='$id_admin',`nombre`='$nombre',`rut`='$rut',`password`='$pass',`ger_id`='$gerencia' WHERE `rut`='$rut'";
        
        
	
        
        $result = mysqli_query($conexion, $query) or die('Ocurrió un error en la consulta SQL');
        echo "Usuario Agregado".$result;
  
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
<!DOCTYPE html>
<html>

<head>
    <title>Log de Bitacora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>
    
</head>
<body>
    
   
    <?php
    $rut=$_POST['rut'];
    $pass = $_POST['pass'];
    //$pass = password_hash($pass, PASSWORD_DEFAULT);
    //$rut='12685578-8';
    //$pass ='12345678';
    //echo $rut;
    //echo $pass;
    
        
    $server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";
    
    $conexion=mysqli_connect($server,$user,$password,$bd);
    
    $consulta="select * from administrador where rut='$rut' and password='$pass' ";
    $resultado= mysqli_query($conexion,$consulta);
    
    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        session_start();
        $session=$_SESSION['id_admin']='SuperUser';
        header("location:welcomeAdmin.php");
        //echo "conexion correcta";
    }else{
         
       echo "no fue posible obtener la consulta";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
        ?>

    </body>
</html>
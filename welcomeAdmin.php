 
<?php
session_start();
error_reporting(0);
$session=$_SESSION['id_admin'];

if ($session == null || $session=''){
echo "Usted no está autorizado";
die();
}

?>

<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-3">
			<div class="jumbotron">
			  <h1 class="display-4">Bienvenido al Portal Administrator</h1>
			  <p class="lead">Portal Administración de usuarios corporativos</p>
			  
			</div>


			<div class="row">
					<div class="col-lg-4">
					<?php include 'menu.php';?>
					
					</div>
					<div class="col-lg-4 bg-light pt-2" >
						<h5>Acceso a System 2.0</h5>
                        
                        
                   
                    <p>Hola    <?php echo $session; ?><br>
                       
                      
                        
                        <p class="text-justify">En nuestro Portal de Administrador puedes gestionar los perfiles de usuarios finales asi como Admistradores.<br>
                        
                        Recuerda no compartir tus credenciales ya que son personales y deberás responder por las acciones registradas en nuestra bitacora.<br><br>
                        Utiliza el menú a tu izquierda según lo requerido.<br><br>
                            
                            Atte<br> <strong>Equipo Admin</strong>
                        </p>
					
					</div>
					<div class="col-lg-4"></div>
			</div>
</div>
</body>
<html>





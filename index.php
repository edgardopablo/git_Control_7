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
										
					</div>
					<div class="col-lg-4 bg-light pt-2" >
						<h5>Acceso a System 2.0</h5>
                        
                    <form action="validaCredenciales.php" method="POST">
					  <div class="form-group">
				        <label for="exampleInputEmail1">Ingrese su rut</label>
						<input type="text" class="form-control" name="rut" id="rut" maxlength="10">
						<small id="idadmin" class="form-text text-muted">Registro registrados. No prestes tus credenciales</small>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Contraseña</label>
						<input type="password" class="form-control" name="pass" id="password1" maxlength="8">
					  </div>
					  <button type="submit" class="btn btn-primary">Ingresar</button>
					</form>
					
					
					</div>
					<div class="col-lg-4"></div>
			</div>
</div>
</body>
<html>





<!DOCTYPE html>

<html lang="en">
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->


    <link rel="icon" type="img/jpg" href="../_vistas/img/programming.ico">

	<title>Login-Acceso</title>
</head>

	<body>
		<br><br><br><br><br>
		<div class="container">
            <div class="row">
            	<div class="card profile" style="width: 378px";>
            		<div class="card-body" style="color: #BADE9F">

						<form  action="cuentas.php" name="login" method="post"  class="login100-form validate-form">
							
							<h2 class="card-title">Login</h2>
							<br>
							<div class="wrap-input100" data-validate="Ingresar Usuario">
								<span class="btn-show-pass">
									<i class="zmdi zmdi-eye"></i>
								</span>
								<input class="input100" type="text" name="usu" required="required" maxlength="20" placeholder="Usuario">
								<span class="focus-input100" data-placeholder="USer"></span>
							</div>

						     
		                     <br>
						    

							<div class="wrap-input100" data-validate="Ingresar password">
								<span class="btn-show-pass">
									<i class="zmdi zmdi-eye"></i>
								</span>
								<input class="input100" type="password" name="pass" required="required" maxlength="10" placeholder="Contrase&ntilde;a">
								<span class="focus-input100" data-placeholder="Password"></span>
							</div>
		                    <br>

		                    <div>
							<select name="tipo" class="wrap-input100" required="required">
									<option value="Administrador">Administrador</option>
									<option value="Empleado">Empleado</option>       
							</select>
							</div>
                            <br>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button name="aceptar" class="login100-form-btn">
										Ingresar
									</button>
								</div>
							</div>
                            <br>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
										<div class="container">
											<div class="row-center">
												<a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Volver a la pagina principal</a>	
											</div>
										</div>
								</div>
							</div>

							

						</form>

                    </div>
				</div>
			</div>
		</div>
    </body>
</html>

<style type="text/css">

		body{
				background-color: #35D2AE;
		}

		.profile{
		    margin:auto;
		    box-shadow: 0px 12px 20px 0px #cccccceb;
		}

		.profile .card-body{
		    text-align:center;
		    background-color: #E19166;
		}
</style>


<?php

require_once("../_modelo/m_login.php");

if(isset($_POST['aceptar'])){
	
	$usu = $_POST['usu'];
	$pass = $_POST['pass'];
	$tipo = $_POST['tipo'];

    $login_class = new  login();

    $login_class->usu = $usu;
    $login_class->pass = $pass;
    $login_class->tipo = $tipo;
   
    $rpta = $login_class->AutentificacionUsuario();

session_start();

	if($rpta == "SI")
	{
		    
		    $_SESSION['usu_session'] = $usu;
		    $_SESSION['pass_session'] = $pass;
		    $_SESSION['tipo_session'] = $tipo;

			header("Location: index.php");
	}
		
		
	
	else
	{
        $_SESSION['usu_session'] = "";
		$_SESSION['pass_session'] = "";
		$_SESSION['tipo_session'] = "";

        header("Location: cuentas.php");
	}
}

?>
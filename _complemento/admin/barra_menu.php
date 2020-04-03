<?php 
session_start();
if(@$_SESSION['usu_session'] == ""){$titulo="SUP-PROGRAM";}  
else {$titulo=$_SESSION['usu_session']." / ".$_SESSION['tipo_session'];}
?>
      <!-- $_SESSION['tipo_session']       $titulo=$_SESSION['usu_session']-->
<header class="header">
                <div class="logo">




                   <a href="index.php" class="navbar-link"><b><font face="Courier" size="6"><?php echo $titulo; ?></font></b></a>
                   
                </div><!-- logo -->
                <nav class="navbar-desktop">
                    <ul class="nav-desktop-ul" align="center">
                        <li class="list-item"><a href="index.php" class="navbar-link">Inicio</a></li>
                        <li class="list-item"><a href="categorias.php" class="navbar-link">Categor&iacute;as</a></li>
                        <li class="list-item"><a href="manuales.php" class="navbar-link">Manuales</a></li>
                        <li class="list-item"><a href="contactenos.php" class="navbar-link">Contactos</a></li>
                        <li class="list-item">
                            <a class="btn btn-primary slide_right" href="cuentas.php" role="button">Iniciar Sesi&oacute;n</a>
    					         </li>

                        <li class="list-item">
                                        
                            <a class="btn btn-primary slide_right" href="../_complemento/admin/cerrarsesion.php" role="button">Cerrar Sesi&oacute;n</a>
                        </li>
                    </ul>
                </nav><!--navbar-desktop-->
                <div class="clear"></div>
            </header><!--header-->
            <br>

        <style type="text/css">
        .btn {
            margin:.5rem; /* for this demo */
        }
        /* slide to right */
        .slide_right {
         border:none;
         background-position: right;
         background: linear-gradient(to right, #00356f 50%,#007bff 50%) no-repeat scroll right bottom / 210% 100% #007bff;
         -webkit-transition: all 200ms ease;
         -moz-transition: all 200ms ease;
         transition: all 200ms ease;
        }

        </style>


<!DOCTYPE html>
<html lang="pt-BR">
<link rel="icon" type="img/jpg" href="../_vistas/img/programming.ico">
<?php
//Estilos
require_once("../_complemento/admin/estilo1.php");
?>

<head>
	<?php
    //Estilos
    require_once("../_complemento/admin/inicio_links_script.php");
    ?>
	<title>SUP-PROGRAM</title>
</head>
        <body style="background-color: #35D2AE;">
                <?php
                //Estilo Barra MENU
                require_once("../_complemento/admin/barra_menu.php");
                ?>

                        
                <?php
                 //--------------------------------------------------------------
                //Modelo POO
                require_once("../_modelo/m_inicio.php");

                $inicio_class = new inicio();
                          
                ?>

                <?php
                //Estilos
                require_once("../_complemento/admin/inicio.php");
                ?>
                		
        </body>
</html>


<?php
//Estilos
require_once("../_complemento/admin/estilo2.php");
?>

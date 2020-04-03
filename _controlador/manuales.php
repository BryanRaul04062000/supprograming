<!DOCTYPE html>
<html lang="pt-BR">
<link rel="icon" type="img/jpg" href="../_vistas/img/programming.ico">
<?php
//Estilos
require_once("../_complemento/admin/estilo1.php");
?>

<head>
        <?php
        //Estilos y lINKS
        require_once("../_complemento/admin/inicio_links_script.php");
        ?>
        <title>Manuales de las carreras que aprender</title>
</head>
        <body style="background-color: #35D2AE;">
                    <?php
                    //barra_menu
                    require_once("../_complemento/admin/barra_menu.php");
                    ?>

                     <h2><u>Opciones de manuales Instructivos:</u></h2>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->        
                    <?php
                    //contenido_v_manuales
                    require_once("../_vistas/v_manuales.php");
                    ?>
                        
        </body>
</html>

<?php
//Estilos
require_once("../_complemento/admin/estilo_manual.php");
?>



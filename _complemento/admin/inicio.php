
<!--*************image gradient hover effect******************************* -->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

            <?php 
             //Colocar datos
        $inicio_class->imagen1 = "https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2019/03/lenguajes_programacion_odiados_amados_2019.jpg?itok=oWvoW2cu";
        $inicio_class->imagen2 = "data:image/jpeg;base64,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";
        $inicio_class->texto1 = "Desarrollo de Software<br>Son uno de los cursos donde podemos desarrollar y dejar que nuestra creatividad este hecha a base de programacion y ejecuci&oacute;n.<br>
        Poseemos diversas maneras de formular la resolución de un problema dado. Algunos de los principales paradigmas de la programación son:<br>
        Programación declarativa.<br>
        Programación estructurada.<br>
        Programación modular.<br>
        Programación orientada a objetos(POO).";
        $inicio_class->texto2 = "Soporte y Mantenimiento<br>Este curso tambien cuenta como otros de las formas de reparar e instalar y mejorar datos o programas que est&aacute;n en la computadora.<br>
        Y aparte desarrollando las tecnicas para ensamblar y con gurar equipos de cómputo de acuerdo a los requerimientos del usuario y especificaciones del fabricante, mantener el equipo de cómputo y software, proporcionar soporte técnico presencial y a distancia en software de aplicación y hardware de acuerdo a los requerimientos del usuario, diseñar e instalar redes LAN de acuerdo a las necesidades de la organización y estándares o ciales y administrar redes LAN de acuerdo a los requerimientos de la organización.";

        //Consultar datos
           $datos = $inicio_class->MostrarInicioParteUno();


        //Recojer Datos
           foreach ($datos as $key) 
           {
               $imagen_1 = $key['imagen_1'];
               $imagen_2 = $key['imagen_2'];
               $texto_1 = $key['texto_1'];
               $texto_2 = $key['texto_2'];
           }
?>


<div class="container">
    <div class="row">
            <section class="image-effect">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-content">
                                <img src="<?php echo $imagen_1; ?>">
                                <div class="overlay">
                                <div class="text"><?php echo $texto_1; ?></div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-content">
                                <img src="<?php echo $imagen_2; ?>">
                                <div class="overlay">
                                    <div class="text"><?php echo $texto_2; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </div>
</div>
<!--************image gradient hover effect******************************** -->

<?php 
//-------------------------------------------------------------------------------------
            //COlocar datos
            $inicio_class->titulo = "Explicaci&oacute;n del porque de esta pagina...";
            $inicio_class->parrafo = "Desde que comenzo la era de la tegnologia se empezo a descubrir mas cosas de las que podamos tomar como un trabajo y de eso se trata crear proyectos o inventos que beneficien a los clientes que van de la mano lo que es EL SOFTWARE Y EL HARDWARE ambas cosas son de las que hay que realizar paginas o cambiar routers aprender un poco mas y ver paso a paso lo que se puede llegar a ser.";
           //Consultar datos
           $datos2 = $inicio_class->MostrarInicioParteDos();

           //Recojer Datos
           foreach ($datos2 as $key) 
           {
               
               $titulo_x = $key['titulo_x'];
               $parrafo_x = $key['parrafo_x'];
           }
//---------------------------------------------------------------------------------------
?>


<!--*************************Bootstrap images with text****************************** -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container section">
        <div class="row">
            <div class="col-md-10">
                <h3>
                    <?php echo $titulo_x; ?>
                </h3>
                <p>
                    <?php echo $parrafo_x; ?>
                </p>
            </div>
        </div>       
</div>

<!--************************Bootstrap images with text****************************** -->




<!--*******************Bootstrap Images to Left and Right with Text and Heading*******-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="how-section1">
    <?php 
     //Codigo de la parte 3
    ?>
        <div class="row">

                <div class="col-md-6 how-img">
                    <img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid" alt=""/>
                </div>


                <div class="col-md-6">
                        <h2>Hardware, sus Complementos e historia</h2>

                        <h2 class="subheading">Entenderas cosas de las cuales se utilizan tanto carreras y estudios profesionales.</h2>

                        <p class="text-muted">Hardware en informática se refiere a las partes físicas, tangibles, de un sistema informático, sus componentes eléctricos, electrónicos, electromecánicos y mecánicos.  Abarca el conjunto de componentes indispensables necesarios para otorgar la funcionalidad mínima a una computadora.</p>
                </div>
        </div>

        <?php 
        //Codigo de la parte 4
        ?>


        <div class="row">

                <div class="col-md-6">
                    <h2>Software y sus caracteristicas</h2>

                    <h2 class="subheading">La programacion cada dia mas se establece en distintos estudios para Sistemas y Softwares de ultima generacion.</h2>

                    <p class="text-muted">El softwarre viene a ser un soporte logico de un sistema informatico que hace comprender el conjunto de componentes logicos y ello vendria ser las aplicaciones de las cuales pueden crearse pro distintos lenguajes de programacion todo para una presentacion de un trabajo ya sea comercial administrativa y negocios. Por otro lado El software también puede estar escrito en lenguaje ensamblador , que es de bajo nivel y posee una alta correspondencia con las instrucciones de lenguaje máquina.</p>
                </div>

                <div class="col-md-6 how-img">
                    <img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid" alt=""/>
                </div>
        </div>
</div>
<!--***************** Bootstrap Images to Left and Right with Text and Heading*********-->

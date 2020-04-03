
<!--*************image gradient hover effect******************************* -->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

            <?php 
             //Colocar datos
        $inicio_class->imagen1 = "https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2019/03/lenguajes_programacion_odiados_amados_2019.jpg?itok=oWvoW2cu";
        $inicio_class->imagen2 = "https://unitel-tc.com/wp-content/uploads/2017/12/mantenimiento-y-soluciones-informaticas.jpg";
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
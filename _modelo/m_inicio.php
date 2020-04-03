<?php
class inicio{

	var $imagen1,$imagen2,$texto1,$texto2,$titulo,$subtitulo,$parrafo;
	

	function MostrarInicioParteUno()
	{
             $imagen_1 = $this->imagen1;
             $imagen_2 = $this->imagen2;
             $texto_1 = $this->texto1;
             $texto_2 = $this->texto2;


           $datos[] = array 
           (
               "imagen_1" =>$imagen_1,
               "imagen_2" =>$imagen_2,
               "texto_1"  =>$texto_1,
               "texto_2"  =>$texto_2
           );

           return $datos;
	}

	function MostrarInicioParteDos()
	{
             $titulo_x = $this->titulo;
             $parrafo_x = $this->parrafo;
             
           	$datos[] = array 
           	(
               
               "titulo_x" =>$titulo_x,
               "parrafo_x"  =>$parrafo_x
               
           	);

           	return $datos;
	}
}
?>
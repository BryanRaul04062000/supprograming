<?php
class login{

	var $usu,$pass,$tipo;
	

	function AutentificacionUsuario()
	{
             $usu_1 = $this->usu;
             $pass_1 = $this->pass;
             $tipo_1 = $this->tipo;
             


           if($usu_1=="Bryan" && $pass_1=="123456" && $tipo_1=="Administrador")
           {
            $rpta= "SI";
           }
           else
            {
             $rpta= "NO";
            }

           return $rpta;
	}

	
}
?>
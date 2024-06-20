<?php
    class VistasModelo{
    /*MODELO PARA OBTENER LAS VISTAS*/
    protected static function obtener_vistas_modelo($vistas){
        $listaBlanca=[];
        if(in_array($vistas,$listaBlanca)){
            if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                $contenido="./vistas/contenidos/".$vistas."-view.php";

            }else{
                $contenido="404";

            }

        }elseif($Vistas=="login" or $Vistas=="index"){
            $contenido="login";
        }else{
            $contenido="404";
        }
        return $contenido;
    }
}
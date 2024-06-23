<?php
    class vistasModelo{
    /*MODELO PARA OBTENER LAS VISTAS*/
    protected static function obtener_vistas_modelo($vistas){
        $listaBlanca=["home","client-list"];
        if(in_array($vistas,$listaBlanca)){
            if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                $contenido="./vistas/contenidos/".$vistas."-view.php";

            }else{
                $contenido="404";

            }

        }elseif($vistas=="login" or $vistas=="index"){
            $contenido="login";
        }else{
            $contenido="404";
        }
        return $contenido;
    }
}
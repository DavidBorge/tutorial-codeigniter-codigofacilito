<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevaLibreria {  // Cuidado: el nombre de la clase debe coincidir con el nombre del archivo

    // Función: crear una lista desordenada HTML (<ul></ul>), pasando el contenido de los <li> en un array
    // Nota: lo pongo como estático porque si no, no me funciona. Como es estático, hay que llamarlo así: NuevaLibreria::crearListaUL();, es decir, sin $this-> y con :: en lugar de ->
    public static function crearListaUL($arrayDeElementosLI)
    {
        $listaUL = "<ul>";

        foreach ($arrayDeElementosLI as $elementoLI) {
            $listaUL .= '<li>'.$elementoLI.'</li>';
        }

        $listaUL .= "</ul>";

        return $listaUL;
    }

}

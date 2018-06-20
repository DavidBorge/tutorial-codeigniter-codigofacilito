<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevaLibreria {  // Cuidado: el nombre de la clase debe coincidir con el nombre del archivo

    private $arrayDeElementosLI;

    public function __construct($array) {
        $this->arrayDeElementosLI = $array;
    }

    // Función: crear una lista desordenada HTML (<ul></ul>), pasando el contenido de los <li> en un array
    public function crearListaUL()
    {
        $listaUL = "<ul>";

        foreach ($this->arrayDeElementosLI as $elementoLI) {
            $listaUL .= '<li>'.$elementoLI.'</li>';
        }

        $listaUL .= "</ul>";

        return $listaUL;
    }

}

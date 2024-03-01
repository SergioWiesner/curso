<?php

namespace App\Resource\Curso;

use App\Models\Curso;

class Manager 
{
    public $nombre;

    function __construct(){
        $this->nombre = "Hola mundo";
    }

    public function listarIntegrantesDelCurso(){
        return Curso::all();
    }
  
}
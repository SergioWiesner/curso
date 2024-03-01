<?php

namespace App\Http\Controllers;

use App\Resource\Curso\Manager;
use Illuminate\Http\Request;
class CursoController extends Controller
{
    public $manager;
    function __construct(){
        $this->manager = new Manager();
        $integrante = $this->manager->listarIntegrantesDelCurso();
    }

    public function index(){
        $manager = new Manager();
        $registros = $manager->listarIntegrantesDelCurso(); 
        dd($registros);

        return view("curso.index");
    }
    public function show(){
        return view("curso.show");
    }
    public function edit(){
        return view("curso.edit");
    }
}
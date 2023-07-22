<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        $apellidosNombres = 'cuchuirumi sayhua Mary Carmen'; 
        $carreraProfesional = 'Desarrollo de Sistemas de Informacion';
        $nivelCiclo = 'IV Semestre'; 
        $turno = 'Dia';

        return view('acercade', compact('apellidosNombres', 'carreraProfesional', 'nivelCiclo', 'turno'));
    }
}



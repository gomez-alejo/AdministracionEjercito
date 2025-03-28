<?php

namespace App\Http\Controllers;

use App\Models\army_corps;
use Illuminate\Http\Request;

class ArmyCorpsController extends Controller
{
    public function create()
    {
        return view('army_corps');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'denomination' => 'required|string|max:255', // Cambiado de integer a string si almacena texto
        ]);

        army_corps::create([
            'denomination' => $request->denomination,
        ]);

        return redirect()->route('cuerpo_ejercito.create')->with('success', 'Cuerpo de Ejército creado exitosamente');
    }
}
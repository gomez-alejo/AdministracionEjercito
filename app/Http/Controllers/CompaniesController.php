<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function create()
    {
        return view('companies');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|max:10',
            'primary_activity' => 'required|string|max:20',
        ]);

        companies::create([
            'id' => $request->num_comp,
            'primary_activity' => $request->primary_activity,
        ]);

        return redirect()->route('compania.create')->with('success', 'Compañía creada exitosamente');
    }
}

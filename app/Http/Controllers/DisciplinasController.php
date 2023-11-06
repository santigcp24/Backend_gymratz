<?php

namespace App\Http\Controllers;

use App\Models\Disciplinas;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Renderable
    {
        $disciplina=Disciplinas::paginate();
        return view("disciplinas.index",compact("disciplina"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplinas $disciplinas)
    {
        //
    }
}

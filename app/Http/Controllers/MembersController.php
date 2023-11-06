<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Esta función muestra una lista de todos los miembros
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create'); // Vista para crear un nuevo miembro

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validar los datos del formulario
        $validatedData = $request->validate([
            'id_profile' => 'required|integer',
            'member_name' => 'required|string',
            'member_lastname' => 'required|string',
            'member_email' => 'required|email|unique:members',
            'member_phone' => 'required|string',
            'member_state' => 'required|string',
            'member_user' => 'required|string|unique:members',
            'member_password' => 'required|string',
        ]);

        // Crear un nuevo miembro con los datos validados
        $member = Member::create($validatedData);

        // Podrías retornar una respuesta para indicar que el miembro fue creado exitosamente
        return response()->json(['message' => 'Miembro creado con éxito', 'data' => $member], 201);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            // Otras validaciones
        ]);
            $member->update($validatedData);
            return redirect()->route('members.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }

    public function storeReserva(Request $request)
    {
        // Valida y almacena la reserva de la clase en la base de datos
        $validatedData = $request->validate([
            'clase_id' => 'required|exists:clases,id', // Asegúrate de que el campo 'clase_id' esté presente en la base de datos
        ]);
    
        $member = Auth::user(); // Obtén al usuario autenticado (miembro)
        $member->reservas()->create($validatedData); // Asocia la reserva a un miembro (asumiendo que existe una relación en el modelo Member)
    
        return redirect()->route('members.index'); // Redirecciona a la página principal de miembros
    }
    



}


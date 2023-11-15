<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\Classroom;
use App\Models\Discipline;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lessons=Lesson::all();
        return view("lesson.index")->with("lessons",$lessons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $lesson=new Lesson();
        // $classroom=Classroom::pluck('id','nombre_salon');
        $classroom=Classroom::all();
        $discipline=Discipline::all();
        //aqui se toma a los usuarios con rol 1 es decir solo por ejemplo los entrenadores
        $usersWithRole1 = User::where('role_id', 1)->get();

        $data = array(
            "lista_salones" => $classroom,
            "lista_disciplinas" => $discipline,
            "lista_usuarios" => $usersWithRole1,
        );
        return view('lesson/create',$data);

        // return view("lesson.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validacion servidor, se pone el name del campo en el formulario no en la base de datos
        //estructura unique=tabla,columna
        // $campos=[
        //     'fecha_leccion'=>'required|date',
        //     'hora_inicio'=>'required|dateTime',
        //     'hora_fin'=>'required|dateTime',
        //     'id_instructor'=>'required',
        //     'id_disciplina'=>'required|string',
        //     'id_salon'=>'required',
        // ];
        // $instructores=
        // $disciplines=
        // $classrooms=
    }

    /**
     * Display the specified resource.
     */
    public function show(lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lesson $lesson)
    {
        //
    }
}

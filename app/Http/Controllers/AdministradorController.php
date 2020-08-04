<?php

namespace App\Http\Controllers;

// Models
use App\Activity;
use App\Document_type;
use App\Faculty;
use App\Program;
use App\Role;
use App\User;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    private $ruta = 'auth.role.administrador';
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkRole:Administrador');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $alert = 'Ok';
        $usuarios = User::orderBy('id', 'ASC')->get();
        return view($this->ruta . '.home', ['usuarios' => $usuarios, 'alert' => $alert]);
    }
    public function perfil(Request $request)
    {
        return view($this->ruta . '.perfil');
    }
    public function registrar_usuario(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'code' => 'required|string|max:8',
            'password' => 'required|password',
            'document' => 'required|string|max:15',
            'document_type' => 'required|string|max:1',
            'email' => 'required|string|email|max:50',
            'emailu' => 'required|string|email|max:50',
            'address' => 'required|string',
            'phone' => 'required|string',
            'birth' => 'required|date|'
        ]);
    }

    public function lista_estudiantes()
    {
        $estudiantes = Role::firstwhere('name', 'Estudiante')->users()->get();
        return view($this->ruta . '.lista_estudiantes', ['estudiantes' => $estudiantes]);
    }
    public function lista_directores()
    {
        $directores = Role::firstwhere('name', 'Director')->users()->get();
        return view($this->ruta . '.lista_directores', ['directores' => $directores]);
    }
    public function lista_docentes()
    {
        $docentes = Role::firstwhere('name', 'Docente')->users()->get();
        return view($this->ruta . '.lista_docentes', ['docentes' => $docentes]);
    }
    public function lista_facultades()
    {
        $facultades = Faculty::orderBy('id', 'ASC')->get();
        return view($this->ruta . '.lista_facultades', ['facultades' => $facultades]);
    }
    public function lista_programas()
    {
        $programas = Program::orderBy('id_faculty', 'ASC')->get();
        return view($this->ruta . '.lista_programas', ['programas' => $programas]);
    }
    public function lista_actividades()
    {
        $actividades = Activity::orderBy('id', 'ASC')->get();
        return view($this->ruta . '.lista_actividades', ['actividades' => $actividades]);
    }
}

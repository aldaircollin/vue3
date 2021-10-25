<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function __construct()
    {
        //$this->clienteRepository = $clienteRepo;
    }

    public function index(Request $request)
    {
        //$clientes = $this->clienteRepository->all();
        $mensajeeloquent="Hola esta funcionando";
        return view('vuepersona.index',compact( 'mensajeeloquent'))        ;
    }

    public function lista(Request $request)
    {
        $persona = Persona::all();
        return $persona;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->apellido = $request->apellido;
        $persona->nombre = $request->nombre;
        $persona->dni = $request->dni;
        $persona->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $persona = Persona::findOrFail($request->idpersona);
        return $persona;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $persona = Persona::findOrFail($request->idpersona);

        $persona->apellido = $request->apellido;
        $persona->nombre = $request->nombre;
        $persona->dni = $request->dni;

        $persona->save();

        return $persona;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    public function destroy(Request $request)
    {
        $persona = Persona::destroy($request->idpersona);
        return $persona;
        //Esta función obtendra el idcliente de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }

}
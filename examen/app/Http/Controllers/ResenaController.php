<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Resena;
use App\Models\Usuario;
use Illuminate\Http\Request;

/**
 * Class ResenaController
 * @package App\Http\Controllers
 */
class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resenas = Resena::paginate();
        
        return view('resena.index', compact('resenas'))
            ->with('i', (request()->input('page', 1) - 1) * $resenas->perPage());



        
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resena = new Resena();
        return view('resena.create', compact('resena'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'contenido' => 'required|string',
            'usuario_id' => 'required',
            'libro_id' => 'required|exists:libros,id', // Asegura que 'libro_id' exista en la tabla 'libros'
        ]);
    
        // Crear la reseña solo si la validación es exitosa
        $resena = Resena::create($request->all());
    
        return redirect()->route('resenas.index')
            ->with('success', 'Resena created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resena = Resena::find($id);

        return view('resena.show', compact('resena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resena = Resena::find($id);

        return view('resena.edit', compact('resena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Resena $resena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resena $resena)
    {
        request()->validate(Resena::$rules);

        $resena->update($request->all());

        return redirect()->route('resenas.index')
            ->with('success', 'Resena updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resena = Resena::find($id)->delete();

        return redirect()->route('resenas.index')
            ->with('success', 'Resena deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bulo;
use Illuminate\Http\Request;

class BuloController extends Controller
{
    /**
     * Mostrar el feed de bulos
     */
    public function index()
    {
        $bulos = Bulo::latest()->get();

        return view('home', compact('bulos'));
    }

    /**
     * Guardar un nuevo bulo
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'textobulo' => 'required|string|max:255',
            'texto_desmentido' => 'required|string|max:255',
            'imagen' => 'nullable|url',
        ], [
            'textobulo.required' => 'Escribe un bulo',
            'texto_desmentido.required' => 'Escribe el desmentido',
            'imagen.url' => 'La imagen debe ser una URL válida',
        ]);

        Bulo::create([
            'textobulo' => $validated['textobulo'],
            'texto_desmentido' => $validated['texto_desmentido'],
            'imagen' => $validated['imagen'] ?? null,
        ]);

        return redirect('/');
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(Bulo $bulo)
    {
        return view('bulos.edit', compact('bulo'));
    }

    /**
     * Actualizar un bulo existente
     */
    public function update(Request $request, Bulo $bulo)
{
    $validated = $request->validate([
        'textobulo' => 'required|string|max:255',
        'texto_desmentido' => 'required|string|max:255',
        'imagen' => 'nullable|url',
    ], [
        'textobulo.required' => 'Escribe el bulo',
        'texto_desmentido.required' => 'Escribe el desmentido',
        'imagen.url' => 'La imagen debe ser una URL válida',
    ]);

    $bulo->update([
        'textobulo' => $validated['textobulo'],
        'texto_desmentido' => $validated['texto_desmentido'],
        'imagen' => $validated['imagen'] ?? null,
    ]);

    return redirect('/')->with('success', 'El bulo ha sido actualizado');
}


    /**
     * Eliminar un bulo
     */
    public function destroy(Bulo $bulo)
    {
        $bulo->delete();

        return redirect('/')->with('success', 'El bulo ha sido eliminado');
    }
}

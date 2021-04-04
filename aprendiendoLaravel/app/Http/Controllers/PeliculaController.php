<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    
    public function index($pagina)
    {
        $titulo = 'Listado de mis películas';
        
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null)
    {
        return view('pelicula.detalle');
    }

    public function redirigir()
    {
        // return \redirect()->action('PeliculaController@detalle');
        // return redirect('/');
        return redirect()->route('detalle.pelicula');
    }

    public function formulario()
    {
        return view('pelicula.formulario');
    }

    public function recibir(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        echo "<pre> El nombre es" , var_export($nombre) , " </pre>";
        echo "<pre> El email es" , var_export($email) , " </pre>";
        die();
    }

}

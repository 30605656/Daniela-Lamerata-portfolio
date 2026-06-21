<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mensaje;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sobreMi()
    {
        return view('sobre_mi');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }



    public function enviarContacto(Request $request)
    {
        $datos = $request->validate([
            'nombre'  => 'required|min:2|max:100',
            'email'   => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        Mensaje::create($datos); //guardo en la BD

        return redirect('/contacto')->with('success', '¡Mensaje enviado! Me contactare pronto.');
    }
}
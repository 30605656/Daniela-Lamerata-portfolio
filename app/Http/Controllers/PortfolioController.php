<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


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

        \Log::info('Mensaje de contacto:', $datos);

        return redirect('/contacto')->with('success', '¡Mensaje enviado! Me contactare pronto.');
    }
}
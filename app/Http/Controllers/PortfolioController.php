<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mensaje;
use Illuminate\Support\Facades\Mail;
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

        Mail::raw(
            "Nuevo mensaje de contacto: \n\n" .
            "Nombre: {$datos['nombre']}\n" .
            "Email: {$datos['email']} \n" . 
            "Mensaje: {$datos['mensaje']}",
            function ($message) use ($datos) {
                $message->to('danielalamerata1@gmail.com')
                    ->subject('Nuevo mensaje de tu portfolio - ' . $datos['nombre']);
            }
        );

        return redirect('/contacto')->with('success', '¡Mensaje enviado! Me contactare pronto.');
    }
}
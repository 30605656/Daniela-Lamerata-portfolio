<?php

namespace App\Http\Controllers;

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
}
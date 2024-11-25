<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class RouteController extends Controller
{
    public function index(){
        return Inertia::render('Welcome');
    }
    public function representante(){
        return Inertia::render('Representante');
    }
    public function promociones(){
        return Inertia::render('Promociones');
    }
    public function productos(){
        return Inertia::render('Productos');
    }
    public function tiendas(){
        return Inertia::render('Tiendas');
    }
    public function empresa(){
        return Inertia::render('Empresa');
    }
    public function contacto(){
        return Inertia::render('Contacto');
    }
    public function notFound(){
        return Inertia::render('NotFound');
        
    }
}

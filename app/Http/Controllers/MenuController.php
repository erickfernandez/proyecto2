<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $items = [
            'Noticias'    => ['url' => 'home'],
            'Galerias'    => ['url' => 'showgaleria'],
            'Formularios' => ['url' => 'showgaleria'],
            'login'         => [],
            'register'      => []
        ];
        return view('menu-test', compact('items'));
    }
}

<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Página Inicial',
        ];

        return view('home/index', $data);
    }
}

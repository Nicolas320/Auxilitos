<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoAhorcado extends Controller
{
    public function index3(){
        return view('livewire.game.Ahorcado');
    }
}

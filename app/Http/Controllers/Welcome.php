<?php

namespace App\Http\Controllers;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('welcome')->extends('layouts.app');
    }
}

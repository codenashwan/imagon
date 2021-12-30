<?php

namespace App\Http\Controllers;

use Livewire\Component;

class Doc extends Component
{
    public function render()
    {
        return view('doc')->extends('layouts.app');
    }
}

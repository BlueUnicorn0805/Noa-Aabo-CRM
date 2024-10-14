<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error404 extends Component
{
    public function render()
    {
        return view('livewire.error404')
        ->layout('layouts.custom-app');
    }
}

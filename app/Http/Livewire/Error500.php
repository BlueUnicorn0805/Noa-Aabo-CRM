<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error500 extends Component
{
    public function render()
    {
        return view('livewire.error500')
        ->layout('layouts.custom-app');
    }
}

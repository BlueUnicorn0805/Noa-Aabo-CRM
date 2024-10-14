<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error501 extends Component
{
    public function render()
    {
        return view('livewire.error501')
        ->layout('layouts.custom-app');
    }
}

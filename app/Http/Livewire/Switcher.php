<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Switcher extends Component
{
    public function render()
    {
        return view('livewire.switcher')
        ->layout('layouts.switcher');
    }
}

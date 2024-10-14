<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        return view('livewire.landing')
        ->layout('layouts.landing-app');
    }
}

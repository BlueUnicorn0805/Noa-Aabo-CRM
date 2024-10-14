<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lockscreen extends Component
{
    public function render()
    {
        return view('livewire.lockscreen')
        ->layout('layouts.custom-app');
    }
}

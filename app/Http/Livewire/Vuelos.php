<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vuelos extends Component
{
    public function render()
    {
        return view('livewire.vuelos.index')
            ->layout('layouts.app');
    }
}

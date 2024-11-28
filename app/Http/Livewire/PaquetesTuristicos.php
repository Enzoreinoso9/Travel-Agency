<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaquetesTuristicos extends Component
{
    public function render()
    {
        return view('livewire.paquetes-turisticos')
            ->layout('layouts.app');
    }
} 
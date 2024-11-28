<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Estadisticas extends Component
{
    public $totalVentas = 0;
    public $totalClientes = 0;
    public $vuelosActivos = 0;
    public $paquetesVendidos = 0;

    public function mount()
    {
        $this->totalVentas = 15350;
        $this->totalClientes = 248;
        $this->vuelosActivos = 35;
        $this->paquetesVendidos = 124;
    }

    public function render()
    {
        return view('livewire.dashboard.estadisticas')
            ->layout('layouts.app');
    }
}

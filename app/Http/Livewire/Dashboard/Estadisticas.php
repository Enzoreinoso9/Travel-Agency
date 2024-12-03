<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Vuelo;
use App\Models\PaqueteTuristico;

class Estadisticas extends Component
{
    public $totalVentas = 0;
    public $totalClientes = 0;
    public $vuelosActivos = 0;
    public $paquetesVendidos = 0;

    public function mount()
    {
        $this->calcularEstadisticas();
    }

    public function calcularEstadisticas()
    {
        $this->totalVentas = Venta::sum('monto_total');
        $this->totalClientes = Cliente::count();
        $this->vuelosActivos = Vuelo::where('disponibilidad', '>', 0)->count();
        $this->paquetesVendidos = PaqueteTuristico::where('estado', 'completado')->count();
    }

    public function render()
    {
        return view('livewire.dashboard.estadisticas')
            ->layout('layouts.app');
    }
}

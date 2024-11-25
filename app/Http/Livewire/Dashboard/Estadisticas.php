<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Venta;
use App\Models\PaqueteTuristico;
use Carbon\Carbon;

class Estadisticas extends Component
{
    public $periodoVentas = 'semana';
    public $periodoVuelos = 'mes';
    public $estadisticas;

    public function mount()
    {
        $this->actualizarEstadisticas();
    }

    public function actualizarEstadisticas()
    {
        $this->estadisticas = [
            'ventas' => $this->obtenerEstadisticasVentas(),
            'vuelos' => $this->obtenerEstadisticasVuelos()
        ];
    }

    private function obtenerEstadisticasVentas()
    {
        $fechaInicio = match($this->periodoVentas) {
            'semana' => now()->startOfWeek(),
            'mes' => now()->startOfMonth(),
            'año' => now()->startOfYear(),
            default => now()->startOfWeek(),
        };

        $ventasInfo = Venta::whereBetween('fecha_venta', [$fechaInicio, now()])
            ->selectRaw('COUNT(*) as total_ventas, COALESCE(SUM(monto_total), 0) as monto_total')
            ->first();

        $paquetesDisponibles = PaqueteTuristico::where('estado', 'programado')
            ->where('fecha_vuelo', '>=', now())
            ->where('asientos_disponibles', '>', 0)
            ->count();

        return [
            'total' => $ventasInfo->total_ventas ?? 0,
            'monto_total' => $ventasInfo->monto_total ?? 0,
            'disponibles' => $paquetesDisponibles
        ];
    }

    private function obtenerEstadisticasVuelos()
    {
        $fechaInicio = $this->periodoVuelos === 'mes' 
            ? now()->startOfMonth() 
            : now()->startOfYear();

        return PaqueteTuristico::where('estado', 'completado')
            ->whereBetween('fecha_vuelo', [$fechaInicio, now()])
            ->count();
    }

    public function render()
    {
        return view('livewire.dashboard.estadisticas');
    }
}

<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Venta;
use App\Models\PaqueteTuristico;
use App\Models\Vuelo;
use App\Models\PasajeOmnibus;
use Illuminate\Support\Facades\DB;

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

        // Obtener información de ventas
        $ventasInfo = Venta::whereBetween('fecha_venta', [$fechaInicio, now()])
            ->selectRaw('COUNT(*) as total_ventas, COALESCE(SUM(monto_total), 0) as monto_total')
            ->first();

        // Contar paquetes turísticos disponibles
        $paquetesDisponibles = PaqueteTuristico::where('fecha_vuelo', '>=', now())
            ->where('estado', 'programado')
            ->where('asientos_disponibles', '>', 0)
            ->count();

        // Obtener total de ventas por tipo
        $ventasPorTipo = DB::table('detalles_ventas')
            ->join('ventas', 'detalles_ventas.id_venta', '=', 'ventas.id_venta')
            ->whereBetween('ventas.fecha_venta', [$fechaInicio, now()])
            ->selectRaw('
                COUNT(DISTINCT id_paquete) as paquetes,
                COUNT(DISTINCT id_vuelo) as vuelos,
                COUNT(DISTINCT id_pasaje) as pasajes
            ')
            ->first();

        return [
            'total' => $ventasInfo->total_ventas ?? 0,
            'monto_total' => $ventasInfo->monto_total ?? 0,
            'disponibles' => $paquetesDisponibles,
            'desglose' => [
                'paquetes' => $ventasPorTipo->paquetes ?? 0,
                'vuelos' => $ventasPorTipo->vuelos ?? 0,
                'pasajes' => $ventasPorTipo->pasajes ?? 0
            ]
        ];
    }

    private function obtenerEstadisticasVuelos()
    {
        $fechaInicio = $this->periodoVuelos === 'mes' 
            ? now()->startOfMonth() 
            : now()->startOfYear();

        return [
            'vuelos' => Vuelo::whereBetween('fecha_salida', [$fechaInicio, now()])->count(),
            'pasajes' => PasajeOmnibus::whereBetween('fecha_salida', [$fechaInicio, now()])->count(),
            'paquetes' => PaqueteTuristico::whereBetween('fecha_vuelo', [$fechaInicio, now()])
                ->where('estado', 'programado')
                ->count()
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.estadisticas');
    }
}

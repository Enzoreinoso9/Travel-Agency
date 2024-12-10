<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Cliente;
use App\Models\PaqueteTuristico;
use App\Models\PasajeOmnibus;
use App\Models\Vuelo;

class Ventas extends Component
{
    public $isCreateModalOpen = false;
    public $isDetailModalOpen = false;
    public $selectedVenta;
    public $step = 1;
    public $id_venta;

    public $id_cliente, $id_usuario, $fecha_venta, $monto_total, $estado_pago;
    public $id_paquete, $id_pasaje, $id_vuelo;

    public $selectPaquete = true;
    public $selectPasaje = true;
    public $selectVuelo = true;

    protected $rules = [
        'id_cliente' => 'required|exists:clientes,id_cliente',
        'fecha_venta' => 'required|date',
        'monto_total' => 'required|numeric',
        'estado_pago' => 'required|in:completo,parcial,pendiente',
        'id_paquete' => 'nullable|exists:paquetes_turisticos,id_paquete',
        'id_pasaje' => 'nullable|exists:pasajes,id_pasaje',
        'id_vuelo' => 'nullable|exists:vuelos,id_vuelo',
    ];

    public function render()
    {
        return view('livewire.ventas.ventas', [
            'clientes' => Cliente::all(),
            'paquetes' => PaqueteTuristico::all(),
            'pasajes' => PasajeOmnibus::all(),
            'vuelos' => Vuelo::all(),
            'ventas' => Venta::with('cliente')->get(),
        ])->layout('layouts.app');
    }

    public function abrirCreateModal()
    {
        $this->resetFields();
        $this->isCreateModalOpen = true;
        $this->step = 1;
    }

    public function cerrarCreateModal()
    {
        $this->isCreateModalOpen = false;
        $this->resetFields();
    }

    public function nextStep()
    {
        $this->validate($this->step === 1 ? [
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'fecha_venta' => 'required|date',
            'monto_total' => 'required|numeric',
            'estado_pago' => 'required|in:completo,parcial,pendiente',
        ] : [
            'id_paquete' => $this->selectPaquete ? 'required|exists:paquetes_turisticos,id_paquete' : 'nullable',
            'id_pasaje' => $this->selectPasaje ? 'required|exists:pasajes,id_pasaje' : 'nullable',
            'id_vuelo' => $this->selectVuelo ? 'required|exists:vuelos,id_vuelo' : 'nullable',
        ]);

        if ($this->step === 1) {
            $this->step++;
        } else {
            $this->createVenta();
        }
    }

    public function createVenta()
    {
        $venta = Venta::create([
            'id_cliente' => $this->id_cliente,
            'id_usuario' => auth()->id(),
            'fecha_venta' => $this->fecha_venta,
            'monto_total' => $this->monto_total,
            'estado_pago' => $this->estado_pago,
        ]);

        DetalleVenta::create([
            'id_venta' => $venta->id_venta,
            'id_paquete' => $this->selectPaquete ? $this->id_paquete : null,
            'id_pasaje' => $this->selectPasaje ? $this->id_pasaje : null,
            'id_vuelo' => $this->selectVuelo ? $this->id_vuelo : null,
        ]);

        session()->flash('message', 'Venta creada exitosamente.');
        $this->cerrarCreateModal();
    }

    public function verDetalles($id_venta)
    {
        $this->selectedVenta = Venta::with(['detalles.paquete', 'detalles.pasaje', 'detalles.vuelo'])
            ->findOrFail($id_venta);

        if (!$this->selectedVenta->detalles) {
            dd('No se encontraron detalles para esta venta', $this->selectedVenta);
        }

        $this->isDetailModalOpen = true;
    }


    public function cerrarDetailModal()
    {
        $this->isDetailModalOpen = false;
        $this->selectedVenta = null;
    }

    private function resetFields()
    {
        $this->id_cliente = '';
        $this->fecha_venta = '';
        $this->monto_total = '';
        $this->estado_pago = 'pendiente';
        $this->id_paquete = '';
        $this->id_pasaje = '';
        $this->id_vuelo = '';
        $this->selectPaquete = true;
        $this->selectPasaje = true;
        $this->selectVuelo = true;
    }
}
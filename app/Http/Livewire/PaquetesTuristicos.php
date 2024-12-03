<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PaqueteTuristico;

class PaquetesTuristicos extends Component
{
    public $paquetes = [];
    public $isCreateModalOpen = false;
    public $isEditModalOpen = false;
    public $paqueteId = null;

    // Campos del formulario
    public $origen, $destino, $fecha_vuelo, $hora_salida, $estado, $capacidad, $asientos_disponibles;

    protected $rules = [
        'origen' => 'required|string|max:255',
        'destino' => 'required|string|max:255',
        'fecha_vuelo' => 'required|date',
        'hora_salida' => 'required|date_format:H:i',
        'estado' => 'required|string|max:50',
        'capacidad' => 'required|integer',
        'asientos_disponibles' => 'required|integer',
    ];

    public function mount()
    {
        $this->paquetes = PaqueteTuristico::all();
    }

    public function render()
    {
        return view('livewire.paquetes.paquete-turistico')
            ->layout('layouts.app');
    }

    public function abrirCreateModal()
    {
        $this->resetFields();
        $this->isCreateModalOpen = true;
    }

    public function cerrarCreateModal()
    {
        $this->isCreateModalOpen = false;
        $this->resetFields();
    }

    public function create()
    {
        $this->validate();

        PaqueteTuristico::create([
            'origen' => $this->origen,
            'destino' => $this->destino,
            'fecha_vuelo' => $this->fecha_vuelo,
            'hora_salida' => $this->hora_salida,
            'estado' => $this->estado,
            'capacidad' => $this->capacidad,
            'asientos_disponibles' => $this->asientos_disponibles,
        ]);

        session()->flash('message', 'Paquete turístico creado exitosamente.');
        $this->cerrarCreateModal();
        $this->paquetes = PaqueteTuristico::all();
    }

    public function abrirEditModal($id)
    {
        $this->paqueteId = $id;
        $this->edit($id);
        $this->isEditModalOpen = true;
    }

    public function cerrarEditModal()
    {
        $this->isEditModalOpen = false;
        $this->resetFields();
    }

    public function edit($id)
    {
        $paquete = PaqueteTuristico::find($id);
        if ($paquete) {
            $this->origen = $paquete->origen;
            $this->destino = $paquete->destino;
            $this->fecha_vuelo = $paquete->fecha_vuelo;
            $this->hora_salida = $paquete->hora_salida->format('H:i'); // Formato de hora
            $this->estado = $paquete->estado;
            $this->capacidad = $paquete->capacidad;
            $this->asientos_disponibles = $paquete->asientos_disponibles;
        }
    }

    public function update()
    {
        $this->validate();

        $paquete = PaqueteTuristico::find($this->paqueteId);
        $paquete->update([
            'origen' => $this->origen,
            'destino' => $this->destino,
            'fecha_vuelo' => $this->fecha_vuelo,
            'hora_salida' => $this->hora_salida,
            'estado' => $this->estado,
            'capacidad' => $this->capacidad,
            'asientos_disponibles' => $this->asientos_disponibles,
        ]);

        session()->flash('message', 'Paquete turístico actualizado exitosamente.');
        $this->cerrarEditModal();
        $this->paquetes = PaqueteTuristico::all();
    }

    public function delete($id)
    {
        $paquete = PaqueteTuristico::find($id);
        if ($paquete) {
            $paquete->delete();
            session()->flash('message', 'Paquete turístico eliminado exitosamente.');
            $this->paquetes = PaqueteTuristico::all();
        }
    }

    private function resetFields()
    {
        $this->origen = '';
        $this->destino = '';
        $this->fecha_vuelo = '';
        $this->hora_salida = '';
        $this->estado = '';
        $this->capacidad = '';
        $this->asientos_disponibles = '';
        $this->paqueteId = null;
    }
} 
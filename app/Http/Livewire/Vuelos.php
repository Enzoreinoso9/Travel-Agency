<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vuelo;

class Vuelos extends Component
{
    use WithPagination;

    public $isCreateModalOpen = false;
    public $isEditModalOpen = false;
    public $vueloId = null;

    // Campos del formulario
    public $aerolinea, $origen, $destino, $fecha_salida, $fecha_llegada, $precio, $disponibilidad;

    protected $rules = [
        'aerolinea' => 'required|string|max:255',
        'origen' => 'required|string|max:255',
        'destino' => 'required|string|max:255',
        'fecha_salida' => 'required|date',
        'fecha_llegada' => 'required|date|after:fecha_salida',
        'precio' => 'required|numeric',
        'disponibilidad' => 'nullable|integer',
    ];

    public function mount()
    {
        // No es necesario cargar los vuelos aquí, se cargan en el render
    }

    public function render()
    {
        return view('livewire.vuelos.vuelo', [
            'vuelos' => Vuelo::paginate(10)
        ])->layout('layouts.app');
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

        Vuelo::create([
            'aerolinea' => $this->aerolinea,
            'origen' => $this->origen,
            'destino' => $this->destino,
            'fecha_salida' => $this->fecha_salida,
            'fecha_llegada' => $this->fecha_llegada,
            'precio' => $this->precio,
            'disponibilidad' => $this->disponibilidad,
        ]);

        session()->flash('message', 'Vuelo creado exitosamente.');
        $this->cerrarCreateModal();
        $this->resetFields();
    }

    public function abrirEditModal($id)
    {
        $this->vueloId = $id;
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
        $vuelo = Vuelo::find($id);
        if ($vuelo) {
            $this->aerolinea = $vuelo->aerolinea;
            $this->origen = $vuelo->origen;
            $this->destino = $vuelo->destino;
            $this->fecha_salida = $vuelo->fecha_salida;
            $this->fecha_llegada = $vuelo->fecha_llegada;
            $this->precio = $vuelo->precio;
            $this->disponibilidad = $vuelo->disponibilidad;
        }
    }

    public function update()
    {
        $this->validate();

        $vuelo = Vuelo::find($this->vueloId);
        $vuelo->update([
            'aerolinea' => $this->aerolinea,
            'origen' => $this->origen,
            'destino' => $this->destino,
            'fecha_salida' => $this->fecha_salida,
            'fecha_llegada' => $this->fecha_llegada,
            'precio' => $this->precio,
            'disponibilidad' => $this->disponibilidad,
        ]);

        session()->flash('message', 'Vuelo actualizado exitosamente.');
        $this->cerrarEditModal();
    }

    public function delete($id)
    {
        $vuelo = Vuelo::find($id);
        if ($vuelo) {
            $vuelo->delete();
            session()->flash('message', 'Vuelo eliminado exitosamente.');
        }
    }

    private function resetFields()
    {
        $this->aerolinea = '';
        $this->origen = '';
        $this->destino = '';
        $this->fecha_salida = '';
        $this->fecha_llegada = '';
        $this->precio = '';
        $this->disponibilidad = '';
        $this->vueloId = null;
    }
}

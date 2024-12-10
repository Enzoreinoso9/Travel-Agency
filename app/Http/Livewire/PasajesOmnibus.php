<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PasajeOmnibus;

class PasajesOmnibus extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $isCreateModalOpen = false;
    public $isEditModalOpen = false;
    public $pasajeId = null;

    // Campos del formulario
    public $empresa_transporte, $origen, $destino, $fecha_salida, $fecha_llegada, $precio, $disponibilidad;

    protected $rules = [
        'empresa_transporte' => 'required|string|max:255',
        'origen' => 'required|string|max:255',
        'destino' => 'required|string|max:255',
        'fecha_salida' => 'required|date',
        'fecha_llegada' => 'required|date|after:fecha_salida',
        'precio' => 'required|numeric',
        'disponibilidad' => 'nullable|integer',
    ];

    public function mount()
    {
        // No es necesario cargar los pasajes aquí, se cargan en el render
    }

    public function render()
    {
        return view('livewire.pasajes-omnibus.pasaje', [
            'pasajes' => PasajeOmnibus::orderBy('fecha_salida', 'asc')->paginate(10)
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

        PasajeOmnibus::create([
            'empresa_transporte' => $this->empresa_transporte,
            'origen' => $this->origen,
            'destino' => $this->destino,
            'fecha_salida' => $this->fecha_salida,
            'fecha_llegada' => $this->fecha_llegada,
            'precio' => $this->precio,
            'disponibilidad' => $this->disponibilidad,
        ]);

        session()->flash('message', 'Pasaje creado exitosamente.');
        $this->cerrarCreateModal();
        $this->resetFields();
    }

    public function abrirEditModal($id)
    {
        $this->pasajeId = $id;
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
        $pasaje = PasajeOmnibus::find($id);
        if ($pasaje) {
            $this->empresa_transporte = $pasaje->empresa_transporte;
            $this->origen = $pasaje->origen;
            $this->destino = $pasaje->destino;
            $this->fecha_salida = $pasaje->fecha_salida;
            $this->fecha_llegada = $pasaje->fecha_llegada;
            $this->precio = $pasaje->precio;
            $this->disponibilidad = $pasaje->disponibilidad;
        }
    }

    public function update()
    {
        $this->validate();

        $pasaje = PasajeOmnibus::find($this->pasajeId);
        if ($pasaje) {
            $pasaje->update([
                'empresa_transporte' => $this->empresa_transporte,
                'origen' => $this->origen,
                'destino' => $this->destino,
                'fecha_salida' => $this->fecha_salida,
                'fecha_llegada' => $this->fecha_llegada,
                'precio' => $this->precio,
                'disponibilidad' => $this->disponibilidad,
            ]);

            session()->flash('message', 'Pasaje actualizado exitosamente.');
            $this->cerrarEditModal();
            $this->resetFields();
        }
    }

    public function delete($id)
    {
        $pasaje = PasajeOmnibus::find($id);
        if ($pasaje) {
            $pasaje->delete();
            session()->flash('message', 'Pasaje eliminado exitosamente.');
        }
    }

    private function resetFields()
    {
        $this->empresa_transporte = '';
        $this->origen = '';
        $this->destino = '';
        $this->fecha_salida = '';
        $this->fecha_llegada = '';
        $this->precio = '';
        $this->disponibilidad = null;
        $this->pasajeId = null;
    }
}
<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;

    public $modalOpen = false;
    public $clienteId = null;
    public $isCreateModalOpen = false;
    public $isEditModalOpen = false;

    public $nombre, $apellido, $documento, $email, $telefono, $direccion;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'documento' => 'required|numeric|digits:8',
        'email' => 'required|email',
        'telefono' => 'required|numeric|digits:10',
        'direccion' => 'required|string|max:255',
    ];

    

    public function create()
    {
        $this->validate();

        Cliente::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'documento' => $this->documento,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
        ]);

        session()->flash('message', 'Cliente creado exitosamente.');
        $this->resetFields();
        $this->modalOpen = false;
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $this->nombre = $cliente->nombre;
            $this->apellido = $cliente->apellido;
            $this->documento = $cliente->documento;
            $this->email = $cliente->email;
            $this->telefono = $cliente->telefono;
            $this->direccion = $cliente->direccion;
        }
    }

    public function update()
    {
        $this->validate();

        $cliente = Cliente::find($this->clienteId);
        $cliente->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'documento' => $this->documento,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
        ]);

        session()->flash('message', 'Cliente actualizado exitosamente.');
        $this->resetFields();
        $this->isEditModalOpen = false;
    }

    private function resetFields()
    {
        $this->nombre = '';
        $this->apellido = '';
        $this->documento = '';
        $this->email = '';
        $this->telefono = '';
        $this->direccion = '';
        $this->clienteId = null;
    }

    public function render()
    {
        return view('livewire.clientes.clientes', [
            'clientes' => Cliente::paginate(10)
        ])->layout('layouts.app');
    }

    public function abrirCreateModal()
    {
        $this->isCreateModalOpen = true;
    }

    public function cerrarCreateModal()
    {
        $this->isCreateModalOpen = false;
        $this->resetFields();
    }

    public function abrirEditModal($id)
    {
        $this->clienteId = $id;
        $this->edit($id);
        $this->isEditModalOpen = true;
    }
    public function cerrarEditModal()
    {
        $this->isEditModalOpen = false;
        
    }

}

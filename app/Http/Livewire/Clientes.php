<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;

    public $cliente_id, $nombre, $apellido, $documento, $email, $telefono, $direccion;
    public $modal = false;
    public $modalDelete = false;
    
    protected $rules = [
        'nombre' => 'required|min:3',
        'apellido' => 'required|min:3',
        'documento' => 'required|unique:clientes,documento|max:50',
        'email' => 'required|email|unique:clientes,email',
        'telefono' => 'nullable|max:50',
        'direccion' => 'nullable'
    ];

    public function render()
    {
        return view('livewire.clientes', [
            'clientes' => Cliente::orderBy('id_cliente', 'desc')->paginate(10)
        ]);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->cliente_id = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->documento = '';
        $this->email = '';
        $this->telefono = '';
        $this->direccion = '';
    }

    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->cliente_id = $cliente->id_cliente;
        $this->nombre = $cliente->nombre;
        $this->apellido = $cliente->apellido;
        $this->documento = $cliente->documento;
        $this->email = $cliente->email;
        $this->telefono = $cliente->telefono;
        $this->direccion = $cliente->direccion;
        $this->abrirModal();
    }
}

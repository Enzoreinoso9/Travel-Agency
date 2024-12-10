<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Component
{
    use WithPagination;

    public $isCreateModalOpen = false;
    public $isEditModalOpen = false;
    public $usuarioId = null;

    // Campos del formulario
    public $nombre_usuario, $email, $password, $rol;

    protected $rules = [
        'nombre_usuario' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email',
        'password' => 'required|string|min:8',
        'rol' => 'required|string|in:admin,user', // Roles permitidos
    ];

    public function render()
    {
        return view('livewire.usuarios.index', [
            'usuarios' => Usuario::where('rol', 'usuario')->paginate(10)
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
        // Validar los campos
        $this->validate([
            'nombre_usuario' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
        ]);

        Usuario::create([
            'nombre_usuario' => $this->nombre_usuario,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Cifrar la contraseña
            'rol' => 'usuario', // Establecer rol por defecto como 'usuario'
        ]);

        session()->flash('message', 'Usuario creado exitosamente.');
        $this->cerrarCreateModal();
    }

    public function abrirEditModal($id)
    {
        $this->usuarioId = $id;
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
        $usuario = Usuario::find($id);
        if ($usuario) {
            /* $this->nombre_usuario = $usuario->nombre_usuario;
            $this->email = $usuario->email; */
            $this->rol = $usuario->rol;
        }
    }

    public function update()
    {
        // Comentar o eliminar este método si no es necesario
        /*
        // Validar los campos
        $this->validate();

        $usuario = Usuario::find($this->usuarioId);
        if ($usuario) {
            $usuario->update([
                'nombre_usuario' => $this->nombre_usuario,
                'email' => $this->email,
                'rol' => $this->rol,
            ]);

            session()->flash('message', 'Usuario actualizado exitosamente.');
            $this->cerrarEditModal();
        }
        */
    }

    public function updateRole()
    {
        // Validar solo el campo rol
        $this->validate([
            'rol' => 'required|string|in:admin,usuario', // Validar solo el rol
        ]);

        $usuario = Usuario::find($this->usuarioId);
        if ($usuario) {
            $usuario->update([
                'rol' => $this->rol, // Solo actualizar el rol
            ]);

            session()->flash('message', 'Rol actualizado exitosamente.');
            $this->cerrarEditModal();
        }
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->delete();
            session()->flash('message', 'Usuario eliminado exitosamente.');
        }
    }

    private function resetFields()
    {
        $this->nombre_usuario = '';
        $this->email = '';
        $this->password = '';
        $this->rol = '';
        $this->usuarioId = null;
    }
} 
<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $nombre_usuario;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'nombre_usuario' => 'required|min:3',
        'email' => 'required|email|unique:usuarios',
        'password' => 'required|min:8|confirmed',
    ];

    protected $messages = [
        'nombre_usuario.required' => 'El nombre es obligatorio',
        'nombre_usuario.min' => 'El nombre debe tener al menos 3 caracteres',
        'email.required' => 'El email es obligatorio',
        'email.email' => 'El email debe ser válido',
        'email.unique' => 'Este email ya está registrado',
        'password.required' => 'La contraseña es obligatoria',
        'password.min' => 'La contraseña debe tener al menos 8 caracteres',
        'password.confirmed' => 'Las contraseñas no coinciden',
    ];

    public function register()
    {
        $this->validate();

        $usuario = Usuario::create([
            'nombre_usuario' => $this->nombre_usuario,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'rol' => 'usuario'
        ]);

        Auth::login($usuario);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
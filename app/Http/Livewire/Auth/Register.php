<?php

namespace App\Http\Livewire\Auth;

use App\Models\Usuario;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $nombre_usuario;
    public $email;
    public $password;
    public $password_confirmation;
    public $rol = 'usuario';

    protected $rules = [
        'nombre_usuario' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    public function register()
    {
        $this->validate();

        $user = Usuario::create([
            'nombre_usuario' => $this->nombre_usuario,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'rol' => 'usuario',
        ]);

        auth()->login($user);

        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
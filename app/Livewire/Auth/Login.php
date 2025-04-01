<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $nome;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required',
        'email'=>'required|email',
        'password'=>'required|min:5 '
    ];

    protected $messages = [
        'nome' => 'Nome é obrigatório',
        'email.required' => 'Email obrigatório',
        'email.email' => 'Formato de email inválido',
        'password.required' => 'Senha obrigatória',
        'password.min' => 'A senha deve conter no mínimo 5 caracteres',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) { //verifica se a tentaiva de login foi real ou falsa
            session()->regenerate(); //cria uma seção ativa 
            return redirect()->route(Auth::user()->role === 'admin' ? //redireciona a rota, ?(autentica) e : senão(else)
                'admin.dashboard' :  'user.dashboard'); //a função Auth::user traz o usuário logado
        }

        session()->flash('error', 'Email ou senha incorretos'); //colocar a mensagem
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}

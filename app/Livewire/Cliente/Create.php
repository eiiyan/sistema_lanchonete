<?php

namespace App\Livewire\Cliente;
use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{


    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required|min:5|max:80',
        'endereco' => 'required|min:5|max:80',
        'telefone' => 'required|max:80',
        'cpf'=> 'required|unique:clientes,cpf|min:5|max:80',
        'email'=>'required|unique:clientes,email|min:5|max:80',
        'password'=>'required|min:5|max:255'
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min'=>'O campo nome requer no mínimo 5 caracteres',
        'nome.max'=>'O campo nome requer no máximo 80 caracteres',
        'endereco.required' => 'O campo endereço é obrigatório',
        'endereco.min'=>'O campo endereço requer no mínimo 5 caracteres',
        'endereco.max'=>'O campo endereço requer no máximo 80 caracteres',
        'telefone.required' => 'O campo telefone é obrigatório',
        'telefone.min'=>'O campo telefone requer no mínimo 5 caracteres',
        'telefone.max'=>'O campo telefone requer no máximo 80 caracteres',
        'cpf.required' => 'O campo cpf é obrigatório',
        'cpf.min'=>'O campo cpf requer no mínimo 5 caracteres',
        'cpf.max'=>'O campo cpf requer no máximo 80 caracteres',
        'cpf.unique' => 'O campo cpf é único',
        'email.required'=>'O campo email é obrigatório',
        'email.min'=>'O campo email requer no mínimo 5 caracteres',
        'email.max'=>'O campo email requer no máximo 80 caracteres',
        'email.unique'=>'O campo email é único',
        'password.required'=>'O campo senha é obrigatório',
        'password.min'=>'O campo senha requer no mínimo 5 caracteres',
        'password.max'=>'O campo senha requer no máximo 80 caracteres',
        
    ];

    public function salvar()
    {
       $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco'=>$this->endereco,
            'telefone' => $this->telefone,
            'cpf'=> $this->cpf,
            'email'=> $this->email,
            'password'=> $this->password
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');

      //  $this->reset();

    }


    public function render()
    {
        return view('livewire.cliente.create');
    }
}

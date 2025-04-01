<?php

namespace Database\Seeders;

use App\Livewire\Cliente\Create;
use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $nomes = collect([
            'João Silva', 'Maria Oliveira', 'Carlos Souza', 'Ana Santos', 'Pedro Lima', 'Lucas Rocha', 
            'Gabriel Costa', 'Paula Pereira', 'Juliana Martins', 'Rafael Alves'
        ]);

        $enderecos = collect([
            'Rua A, 123', 'Rua B, 456', 'Rua C, 789', 'Rua D, 101', 'Rua E, 202', 'Rua F, 303', 
            'Rua G, 404', 'Rua H, 505', 'Rua I, 606', 'Rua J, 707'
        ]);

        $telefones = collect([
            '999999999', '988888888', '977777777', '966666666', '955555555', '944444444', 
            '933333333', '922222222', '911111111', '900000000'
        ]);

        $emails = collect([
            'joao.silva@example.com', 'maria.oliveira@example.com', 'carlos.souza@example.com', 
            'ana.santos@example.com', 'pedro.lima@example.com', 'lucas.rocha@example.com', 
            'gabriel.costa@example.com', 'paula.pereira@example.com', 'juliana.martins@example.com', 
            'rafael.alves@example.com'
        ]);

        $senhas = collect([
            'senha123', 'senha456', 'senha789', 'senha101', 'senha102', 'senha103', 'senha104', 
            'senha105', 'senha106', 'senha107'
        ]);

        $cpfs = collect();
        while ($cpfs->count() < 10) {
    
            $cpf = str_pad(rand(90000000000, 99999999999), 11, '0', STR_PAD_LEFT);
            if (!$cpfs->contains($cpf)) {
                $cpfs->push($cpf);
            }
        }

        
        for ($i = 0; $i < 10; $i++) { 
            Cliente::create([
                'nome' => $nomes->get($i), // Nome retirado da coleção
                'endereco' => $enderecos->get($i), // Endereço retirado da coleção
                'telefone' => $telefones->get($i), // Telefone retirado da coleção
                'cpf' => $cpfs->get($i), // CPF único retirado da coleção
                'email' => $emails->get($i), // Email retirado da coleção
                'password' => Hash::make($senhas->get($i)), // Senha criptografada
            ]);
        }
    }
    
        }
    




<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{

    public function run(): void
    {
        Cliente::create([
            'nome' => 'João da Silva',
            'email' => 'joao@gmail.com',
            'endereco' => 'Rua das Flores, 123',
            'logradouro' => 'Rua das Flores',
            'cep' => '12345-678',
            'bairro' => 'Centro',
        ]);

        Cliente::create([
            'nome' => 'Maria Santos',
            'email' => 'maria@gmail.com',
            'endereco' => 'Avenida Brasil, 456',
            'logradouro' => 'Avenida Brasil',
            'cep' => '87654-321',
            'bairro' => 'Jardim América',
        ]);

        Cliente::create([
            'nome' => 'Pedro Oliveira',
            'email' => 'pedro@gmail.com',
            'endereco' => 'Rua São Paulo, 789',
            'logradouro' => 'Rua São Paulo',
            'cep' => '54321-987',
            'bairro' => 'Vila Nova',
        ]);
    }
}

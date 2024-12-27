<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro'
    ];

    public function getClientesPesquisarIndex(string $search = ''){
        return $this->where(function($query) use ($search){
            if($search){
                $query->where('nome', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%");
                $query->orWhere('email', 'LIKE', "%{$search}%");
                $query->orWhere('endereco', 'LIKE', "%{$search}%");
                $query->orWhere('logradouro', 'LIKE', "%{$search}%");
                $query->orWhere('cep', 'LIKE', "%{$search}%");
                $query->orWhere('bairro', 'LIKE', "%{$search}%");
            }
        })->get();
    }
}

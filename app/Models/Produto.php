<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco'];

    public function getProdutosPesquisarIndex(string $search = null)
    {
        $produto = $this->where(function($query) use ($search){
            if($search){
                $query->where('nome', 'like', '%' . $search . '%');
                $query->orWhere('preco', 'like', '%' . $search . '%');
            }
        })->get();

        return $produto;
    }
}

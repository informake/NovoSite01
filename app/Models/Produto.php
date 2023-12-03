<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
    ];

    /**
     * Recupera produtos com base no critério de pesquisa.
     *
     * @param  string  $search
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getProdutosPesquisarIndex(string $search = '')
    {
        // Lógica para recuperar produtos com base no critério de pesquisa
        // Você pode ajustar isso de acordo com suas necessidades

        if ($search) {
            return $this->where('nome', 'like', '%' . $search . '%')->get();
        } else {
            return $this->all();
        }
    }
}


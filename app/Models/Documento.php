<?php

namespace App\Models;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'cliente_id',
        'cpf_rg',
    ];

    public function rules()
    {   
        return [
            'cliente_id'=>'required',
            'cpf_cnpj' =>'required|unique:documentos',
        ];

    }
}

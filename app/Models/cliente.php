<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        "nome", "celular", "telefone", "email",
        "logradouroEndereco","bairroEndereco", "numeroEndereco", "cepEndereco",
        "cidadeEndereco", "observacao", "situacao"
      ];
      protected $table = "clientes";

    use HasFactory;
}

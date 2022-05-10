<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class corretores extends Model
{
    protected $fillable = ["id",
        "nome", "celular", "cpf"
    ];
    protected $table = "corretores";

    //use HasFactory;
}

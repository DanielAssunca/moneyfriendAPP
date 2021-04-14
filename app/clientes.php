<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class clientes extends Model
{
    protected $fillable = ["id",
      "nome", "celular", "telefone", "email",
      "rua",  "bairro", "numero",  "cep", "cidade", "observacao", "situacao","tipocliente"
    ];
    protected $table = "clientes";

    public function dividas(){
        return $this->hasMany('App\dividas', 'clientes_id');
    }


    public function acompanhamentos(){
        return $this->hasMany('App\acompanhamentos', 'clientes_id');
    }


}


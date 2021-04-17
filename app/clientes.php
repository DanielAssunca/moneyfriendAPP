<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class clientes extends Model
{
    protected $fillable = ["id",
      "nome", "celular", "telefone", "email",
      "rua",  "bairro", "numero",  "cep", "cidade", "situacao","tipocliente"
    ];
    protected $table = "clientes";

    public function contasareceber(){
        return $this->hasMany('App\contasareceber', 'clientes_id');
    }

}


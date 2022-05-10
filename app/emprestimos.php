<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emprestimos extends Model
{
    protected $fillable = ["id",
        "data", "idcliente", "idcorretor", "tipoperiodo",
        "valornominal", "valorjuros", "valortotal",
        "valorematraso", "datavencimento", "comissaocorretor", "observacao", "status",
    ];
    protected $table = "emprestimos";

    public function contasareceber()
    {
        return $this->hasMany('App\pagamentos', 'idemprestimo');
    }

    // use HasFactory;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagamentos extends Model
{
    protected $fillable = ["pagousojuros",
        "statusPag", "idemprestimo", "datapagamento", "valorpago"
    ];
    protected $table = "pagamentos";

   

    //use HasFactory;
}

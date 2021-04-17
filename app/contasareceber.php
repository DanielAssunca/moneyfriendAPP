<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contasareceber extends Model
{
    protected $fillable = ["id",
    "idcliente", "data", "valor", "tipojuros",
    "valorjuros",  "vencimento", "status"
  ];
  protected $table = "contasareceber";

    use HasFactory;
}

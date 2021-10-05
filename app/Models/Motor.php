<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = [
        'id',
        'tag',
        'potencia',
        'polos',
        'carcaça',
        'fabricante'
    ];
}

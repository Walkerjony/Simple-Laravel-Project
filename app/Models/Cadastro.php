<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'table_dados';

    protected $fillable = [
        'name',
        'cpf',
        'cellphone',
        'email',
        'password'
    ];
}

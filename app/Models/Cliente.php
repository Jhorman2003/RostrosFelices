<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'tb_cliente';
    protected $primaryKey ='id_cliente';
    protected $timestamp = false;

}

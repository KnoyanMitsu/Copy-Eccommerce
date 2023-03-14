<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentar extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'product_id',
        'comentar',
        'bintang',
    ];
    protected $table = 'comentar';
    use HasFactory;
}

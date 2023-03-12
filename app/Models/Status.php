<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'product_id',
        'status',
    ];
    protected $table = 'statuspengiriman';
    use HasFactory;
}

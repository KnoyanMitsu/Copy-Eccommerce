<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'product_id',
        'quantity',
        'total_price',
    ];
    use HasFactory;
}

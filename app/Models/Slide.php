<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'id',
        'product_id',
        'gambar_slide',
    ];
    protected $table = 'slideproduct';
    use HasFactory;
}

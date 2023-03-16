<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'judul',
        'kategory',
        'image',
        'deskripsi',
        'harga',
        'stok',
    ];
    use HasFactory;
}

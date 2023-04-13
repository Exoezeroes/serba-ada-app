<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'img_path'
    ];
    
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category_id', 'description', 'price', 'img_path'
    ];

    protected $hidden = [
        'id', 'category_id', 'created_at', 'updated_at'
    ];
    
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}

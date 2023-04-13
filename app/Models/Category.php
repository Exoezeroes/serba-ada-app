<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'img_path'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}

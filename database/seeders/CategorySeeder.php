<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Alat Tukang',
                'slug' => 'alat-tukang',
                'img_path' => '/storage/category/alat-tukang.jpg'
            ],
            [
                'name' => 'Alat Nelayan',
                'slug' => 'alat-nelayan',
                'img_path' => '/storage/category/alat-nelayan.jpg'
            ],
            [
                'name' => 'Alat Listrik',
                'slug' => 'alat-listrik',
                'img_path' => '/storage/category/alat-listrik.jpg'
            ],
            [
                'name' => 'Bahan Bangunan',
                'slug' => 'bahan-bangunan',
                'img_path' => '/storage/category/bahan-bangunan.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

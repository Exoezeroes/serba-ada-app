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
                'title' => 'Alat Tukang',
                'description' => 'Kebutuhan bagi para tukang-tukang',
                'slug' => 'alat-tukang',
                'img_path' => '/storage/category/alat-tukang.jpg'
            ],
            [
                'title' => 'Alat Nelayan',
                'description' => 'Peralatan untuk memancing',
                'slug' => 'alat-nelayan',
                'img_path' => '/storage/category/alat-nelayan.jpg'
            ],
            [
                'title' => 'Alat Listrik',
                'description' => 'Alat-alat untuk melancarkan aktivitas berlistrik',
                'slug' => 'alat-listrik',
                'img_path' => '/storage/category/alat-listrik.jpg'
            ],
            [
                'title' => 'Bahan Bangunan',
                'description' => 'Bahan dasar pembangunan',
                'slug' => 'bahan-bangunan',
                'img_path' => '/storage/category/bahan-bangunan.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

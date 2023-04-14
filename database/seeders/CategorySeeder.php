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
                'img_path' => 'https://github.com/Exoezeroes/serba-ada/blob/assets/alat-tukang.jpg?raw=true'
            ],
            [
                'title' => 'Alat Nelayan',
                'description' => 'Peralatan untuk memancing',
                'slug' => 'alat-nelayan',
                'img_path' => 'https://github.com/Exoezeroes/serba-ada/blob/assets/alat-nelayan.jpg?raw=true'
            ],
            [
                'title' => 'Alat Listrik',
                'description' => 'Alat-alat untuk melancarkan aktivitas berlistrik',
                'slug' => 'alat-listrik',
                'img_path' => 'https://github.com/Exoezeroes/serba-ada/blob/assets/alat-listrik.jpg?raw=true'
            ],
            [
                'title' => 'Bahan Bangunan',
                'description' => 'Bahan dasar pembangunan',
                'slug' => 'bahan-bangunan',
                'img_path' => 'https://github.com/Exoezeroes/serba-ada/blob/assets/bahan-bangunan.jpg?raw=true'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

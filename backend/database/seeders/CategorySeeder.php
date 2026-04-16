<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Clothing',
            'Books',
            'Home & Kitchen',
            'Sports & Outdoors',
            'Toys & Games',
            'Beauty & Personal Care',
            'Health & Household',
            'Automotive',
            'Tools & Home Improvement',
        ];

        foreach ($categories as $category) {
            if (!Category::where('name', $category)->exists()) {
                Category::create([
                    'name' => $category,
                ]);
            }
        }
    }
}

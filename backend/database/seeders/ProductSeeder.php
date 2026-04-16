<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'sku' => 'SKU-001',
                'category_id' => 1,
                'price' => 10.00,
                'quantity' => 10,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Product 2',
                'sku' => 'SKU-002',
                'category_id' => 2,
                'price' => 20.00,
                'quantity' => 20,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Product 3',
                'sku' => 'SKU-003',
                'category_id' => 3,
                'price' => 30.00,
                'quantity' => 30,
                'supplier_id' => 3,
            ],
            [
                'name' => 'Product 4',
                'sku' => 'SKU-004',
                'category_id' => 4,
                'price' => 40.00,
                'quantity' => 40,
                'supplier_id' => 4,
            ],
            [
                'name' => 'Product 5',
                'sku' => 'SKU-005',
                'category_id' => 5,
                'price' => 50.00,
                'quantity' => 50,
                'supplier_id' => 5,
            ],
            [
                'name' => 'Product 6',
                'sku' => 'SKU-006',
                'category_id' => 6,
                'price' => 60.00,
                'quantity' => 60,
                'supplier_id' => 6,
            ],
            [
                'name' => 'Product 7',
                'sku' => 'SKU-007',
                'category_id' => 7,
                'price' => 70.00,
                'quantity' => 70,
                'supplier_id' => 7,
            ],
            [
                'name' => 'Product 8',
                'sku' => 'SKU-008',
                'category_id' => 8,
                'price' => 80.00,
                'quantity' => 80,
                'supplier_id' => 8,
            ],
            [
                'name' => 'Product 9',
                'sku' => 'SKU-009',
                'category_id' => 9,
                'price' => 90.00,
                'quantity' => 90,
                'supplier_id' => 9,
            ],
            [
                'name' => 'Product 10',
                'sku' => 'SKU-010',
                'category_id' => 10,
                'price' => 100.00,
                'quantity' => 100,
                'supplier_id' => 10,
            ],
        ];

        foreach ($products as $product) {
            if (!Product::where('sku', $product['sku'])->exists()) {
                Product::create($product);
            }
        }
    }
}

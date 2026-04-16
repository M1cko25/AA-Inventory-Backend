<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            'Supplier A',
            'Supplier B',
            'Supplier C',
            'Supplier D',
            'Supplier E',
            'Supplier F',
            'Supplier G',
            'Supplier H',
            'Supplier I',
            'Supplier J',
        ];

        foreach ($suppliers as $supplier) {
            if (!Supplier::where('name', $supplier)->exists()) {
                Supplier::create([
                    'name' => $supplier,
                ]);
            }
        }
    }
}

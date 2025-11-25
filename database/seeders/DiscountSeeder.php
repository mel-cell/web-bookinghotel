<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Discount::firstOrCreate(
            ['kode' => 'WELCOME10'],
            [
                'nama' => 'Welcome Discount',
                'persentase' => 10,
                'expires_at' => now()->addMonth(),
            ]
        );

        \App\Models\Discount::firstOrCreate(
            ['kode' => 'SUMMER20'],
            [
                'nama' => 'Summer Sale',
                'persentase' => 20,
                'expires_at' => now()->addMonths(2),
            ]
        );

        \App\Models\Discount::firstOrCreate(
            ['kode' => 'EXPIRED50'],
            [
                'nama' => 'Flash Sale (Expired)',
                'persentase' => 50,
                'expires_at' => now()->subDay(),
            ]
        );
    }
}

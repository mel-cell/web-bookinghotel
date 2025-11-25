<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::where('role', 'user')->get();
        $rooms = \App\Models\Room::all();

        if ($users->isEmpty() || $rooms->isEmpty()) {
            return;
        }

        foreach ($users as $user) {
            // Create a completed booking (past)
            \App\Models\Booking::create([
                'user_id' => $user->id,
                'room_id' => $rooms->random()->id,
                'tgl_check_in' => now()->subDays(10),
                'tgl_check_out' => now()->subDays(7),
                'jumlah_kamar' => 1,
                'total_harga' => 3000000,
                'status' => 'selesai',
                'payment_method' => 'credit_card',
                'credit_card_number' => '4242424242424242',
            ]);

            // Create a pending booking (future)
            \App\Models\Booking::create([
                'user_id' => $user->id,
                'room_id' => $rooms->random()->id,
                'tgl_check_in' => now()->addDays(5),
                'tgl_check_out' => now()->addDays(7),
                'jumlah_kamar' => 1,
                'total_harga' => 2000000,
                'status' => 'pending',
                'payment_method' => 'pay_at_hotel',
            ]);
        }
    }
}

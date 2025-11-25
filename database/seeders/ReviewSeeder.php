<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $completedBookings = \App\Models\Booking::where('status', 'selesai')->get();

        foreach ($completedBookings as $booking) {
            \App\Models\Review::create([
                'user_id' => $booking->user_id,
                'room_id' => $booking->room_id,
                'booking_id' => $booking->id,
                'rating' => rand(4, 5),
                'comment' => 'Great stay! Really enjoyed the ' . $booking->room->nama_kamar . '.',
            ]);
        }
    }
}

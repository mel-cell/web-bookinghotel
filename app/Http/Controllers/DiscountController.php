<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function claim(Request $request, $id)
    {
        $discount = \App\Models\Discount::findOrFail($id);
        $user = auth()->user();

        // Check if already claimed
        if (!$user->discounts()->where('discount_id', $discount->id)->exists()) {
            $user->discounts()->attach($discount->id, ['is_used' => false]);
            return back()->with('success', 'Discount claimed successfully!');
        }

        return back()->with('info', 'You have already claimed this discount.');
    }
}

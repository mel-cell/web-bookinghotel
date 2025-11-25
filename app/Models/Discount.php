<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['nama', 'kode', 'persentase', 'expires_at'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_discounts')
            ->withPivot('is_used')
            ->withTimestamps();
    }
}

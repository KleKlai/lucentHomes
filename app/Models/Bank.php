<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Deposit extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'checkout_id', 'user_id', 'bank_name', 'account_no', 'date', 'time', 'deposit_code', 'amount', 'status', 'approved_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }
}

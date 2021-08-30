<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Support\Str;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','reference_no', 'bank_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deposit()
    {
        return $this->hasOne(Checkout::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SplOffering extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_payment',
        'amount',
        'purpose',
        'payment_id',
        'order_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    protected $fillable = [
        'creator_id',
        'customer_name',
        'order_date',
        'ordered_products',
        'delivery_address',
    ];

    protected $casts = [
        'ordered_products' => 'array',
    ];
}

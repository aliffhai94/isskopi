<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_produce_id',
        'balance',
        'sell_amount',
        'add_amount',
        'total_amount'
    ];
}

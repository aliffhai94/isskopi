<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_name',
        'item_description',
        'item_price'
    ];
    
    /**
     * item id relation to Shop item
     *
     * @var array
     */
    public function itemtoStore(){
        return $this->hasMany(StoreItem::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * Item relation to user
     *
     * @var array
     */
    
    public function itemProduces(){
        return $this->hasMany(ItemProduce::class);
    }

    /**
     * Shop relation to user
     *
     * @var array
     */
    public function shop(){
        return $this->hasMany(Shop::class);
    }

    /**
     * user id relation to Shop/item
     *
     * @var array
     */
    public function storeItems(){
        return $this->hasMany(StoreItem::class);
    }
     
}

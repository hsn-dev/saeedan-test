<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'seller_id',
        'buyer_id',
        'status',
    ];

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }

    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }
}

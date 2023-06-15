<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function order_transaction()
    {
        return $this->belongsTo(OrderTransaction::class);
    }

    public function sweets()
    {
        return $this->hasMany(Sweets::class);
    }

    public function users()
    {
        return $this->hasMany(Users::class);
    }
}

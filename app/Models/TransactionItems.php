<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    protected $filllable = [
        'transaction_id',
        'foods_id',
        'quantity',
        'price',
        'subtotal',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transaction_id');
    }

    public function foods()
    {
        return $this->belongsTo(Foods::class,'foods_id');
    }
}

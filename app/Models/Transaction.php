<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items()
    {
        return $this->belongsTo(TransactionItems::class, 'transaction_id');
    }

    public function barcodes()
    {
        return $this->belongsTo(Barcode::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no', 'invoice_date', 'due_date',
        'title', 'sub_total', 'discount',
        'grand_total', 'client',
        'client_address'
    ];

    public function products()
    {
        return $this->hasMany(InvoiceProduct::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'resident_type',
        'new_address',
        'political_contribution',
        'identity_theft',
        'made_purchase',
        'use_tax',
        'purchase_total',
        'purchase_sale_tax',
    ];
}

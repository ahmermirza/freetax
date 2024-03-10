<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unemployment extends Model
{
    protected $fillable = [
        'received_unemployment',
        'received_other_unemployment',
        'spouse_received_unemployment',
        'spouse_received_other_unemployment',
        'union_unemployment',
        'private_fund_unemployment',
        'state_unemployment_benefit',
        'spouse_union_unemployment',
        'spouse_private_fund_unemployment',
        'spouse_state_unemployment_benefit',
    ];
}

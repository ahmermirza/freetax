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
        'ssb',
        'ssb_repaid',
        'ssb_federal',
        'ssb_medi',
        'ssb_received_ss',
        'ssb_received_benefits',
        'spouse_ssb',
        'spouse_ssb_repaid',
        'spouse_ssb_federal',
        'spouse_ssb_medi',
        'spouse_ssb_received_ss',
        'spouse_ssb_received_benefits',
        'crypto',
    ];
}

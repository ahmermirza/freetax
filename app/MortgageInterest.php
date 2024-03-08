<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MortgageInterest extends Model
{
    protected $fillable = [
        'refinanced',
        'lender_name',
        'deductible_mortgage',
        'outstanding_mortgage',
        'dob',
        'refund_overpaid',
        'pmi',
        'points_paid',
        'money_used',
        'main_home',
        'estate_tax',
    ];

}

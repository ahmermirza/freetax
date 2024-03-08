<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeductionsCredits extends Model
{
    protected $fillable = [
        'cash_donations',
        'cash_donations_amount',
        'non_cash_donations',
        'non_cash_donations_amount',
        'donation_carryover',
        'standard_mileage',
        'standard_mileage_amount',
        'non_pocket',
        'health',
        'long_term',
        'doctor',
        'hospital',
        'prescriptions',
        'equipment',
        'travel',
        'other',
        'sales_tax',
        'own_money',
        'pay_tax',
        'other_tax',
        'applied_refund',
        'file_extension',
        'personal_tax',
        'other_deductible_tax',
        'other_deductible_tax_desc',
    ];
}

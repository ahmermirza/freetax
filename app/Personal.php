<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = ['first_name', 'last_name', 'occupation', 'dob', 'middle_initial', 'suffix', 'ssn', 'street_address', 'apt_no', 'city', 'state', 'zip', 'address_changed', 'parent_claim', 'campaign_contribution', 'blind', 'passed_away', 'filing_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dependents()
    {
        return $this->hasMany(Dependent::class);
    }

    public function spouse()
    {
        return $this->hasOne(Spouse::class);
    }

    public function w2()
    {
        return $this->hasMany(W2::class);
    }

    public function mortgage_interest()
    {
        return $this->hasMany(MortgageInterest::class);
    }

    public function deductions_credit()
    {
        return $this->hasOne(DeductionsCredits::class);
    }

    public function form_1099g()
    {
        return $this->hasMany(Form1099G::class);
    }

    public function unemployment()
    {
        return $this->hasOne(Unemployment::class);
    }

    public function state()
    {
        return $this->hasMany(State::class);
    }
}

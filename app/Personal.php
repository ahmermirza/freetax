<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = ['first_name', 'last_name', 'occupation', 'dob', 'middle_initial', 'suffix', 'ssn', 'street_address', 'apt_no', 'city', 'state', 'zip', 'address_changed', 'parent_claim', 'campaign_contribution', 'blind', 'passed_away', 'filing_status', 'spouse_first_name', 'spouse_last_name', 'spouse_occupation', 'spouse_dob', 'spouse_middle_initial', 'spouse_suffix', 'spouse_ssn', 'spouse_parent_claim', 'spouse_campaign_contribution', 'spouse_blind', 'spouse_passed_away'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dependents()
    {
        return $this->hasMany(Dependent::class);
    }
}

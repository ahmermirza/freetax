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
}

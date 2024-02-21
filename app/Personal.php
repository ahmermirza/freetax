<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = ['first_name', 'last_name', 'occupation', 'dob', 'middle_initial', 'suffix', 'ssn', 'street_address', 'apt_no', 'city', 'state', 'zip', 'parent_claim', 'campaign_contribution', 'blind', 'passed_away'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

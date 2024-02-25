<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    protected $fillable = ['first_name', 'last_name', 'occupation', 'dob', 'middle_initial', 'suffix', 'ssn', 'parent_claim', 'campaign_contribution', 'blind', 'passed_away'];
}

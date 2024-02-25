<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $fillable = ['first_name', 'last_name', 'ssn', 'relation', 'middle_initial', 'suffix', 'dob'];
}

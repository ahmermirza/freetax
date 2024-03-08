<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class W2 extends Model
{
    public $table = 'w2s';

    protected $fillable = [
        'ein',
        'emp_name',
        'emp_foreign_address',
        'emp_address',
        'emp_city',
        'emp_state',
        'emp_zip',
        'federal_wages',
        'federal_income_tax',
        'federal_ss_wages',
        'federal_ss_tax',
        'federal_medicare_wages',
        'federal_medicare_tax',
        'federal_ss_tips',
        'federal_allocated_tips',
        'federal_empty',
        'federal_dependent',
        'federal_nonqualified',
        'code_1',
        'amount_1',
        'code_2',
        'amount_2',
        'statutory_employee',
        'eetirement_plan',
        'third_party_pay',
        'other_desc',
        'other_amount',
        'employer_state',
        'employer_sin',
        'employer_state_wages',
        'employer_state_income_tax',
        'employer_local_wages',
        'employer_local_income_tax',
        'employer_locality',
        'w2_standard',
        'w2_corrected',
        'clergy_member',
        'contribute',
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function spouse()
    {
        return $this->belongsTo(Spouse::class);
    }
}

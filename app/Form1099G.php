<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form1099G extends Model
{
    protected $table = 'form1099gs';
    protected $fillable = [
        'belongs_to',
        'payer_name',
        'unemployment_compensation',
        'federal_income_tax',
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}

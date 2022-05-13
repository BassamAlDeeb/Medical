<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable =     [
        'pat_passport_no',
        'pat_name',
        'pat_nationality',
        'pat_date_of_birth',
        'pat_gender',
        'pat_job',
        'pat_payer',
       ];
}

